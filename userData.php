<script type="text/javascript">
// Save user data to the database
function saveUserData(userData){
    $.post('userData.php', { oauth_provider:'google', userData: JSON.stringify(userData) });
}

// Sign-in success callback
function onSuccess(googleUser) {
    // Get the Google profile data (basic)
    //var profile = googleUser.getBasicProfile();
    
    // Retrieve the Google account data
    gapi.client.load('oauth2', 'v2', function () {
        var request = gapi.client.oauth2.userinfo.get({
            'userId': 'me'
        });
        request.execute(function (resp) {
            // Display the user details
            var profileHTML = '<h3>Welcome '+resp.given_name+'! <a href="javascript:void(0);" onclick="signOut();">Sign out</a></h3>';
            profileHTML += '<img src="'+resp.picture+'"/><p><b>Google ID: </b>'+resp.id+'</p><p><b>Name: </b>'+resp.name+'</p><p><b>Email: </b>'+resp.email+'</p><p><b>Gender: </b>'+resp.gender+'</p><p><b>Locale: </b>'+resp.locale+'</p><p><b>Google Profile:</b> <a target="_blank" href="'+resp.link+'">click to view profile</a></p>';
            document.getElementsByClassName("userContent")[0].innerHTML = profileHTML;
            
            document.getElementById("gSignIn").style.display = "none";
            document.getElementsByClassName("userContent")[0].style.display = "block";
            
            // Save user data
            saveUserData(resp);
        });
    });
}
</script>

<?php
// Load the database configuration file
require_once 'dbConfig.php';

// Get and decode the POST data
$userData = json_decode($_POST['userData']);

if(!empty($userData)){
    // The user's profile info
    $oauth_provider = $_POST['oauth_provider'];
    $oauth_uid  = !empty($userData->id)?$userData->id:'';
    $first_name = !empty($userData->given_name)?$userData->given_name:'';
    $last_name  = !empty($userData->family_name)?$userData->family_name:'';
    $email      = !empty($userData->email)?$userData->email:'';
    $gender     = !empty($userData->gender)?$userData->gender:'';
    $locale     = !empty($userData->locale)?$userData->locale:'';
    $picture    = !empty($userData->picture)?$userData->picture:'';
    $link       = !empty($userData->link)?$userData->link:'';
    
    // Check whether the user data already exist in the database
    $query = "SELECT * FROM users_google WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$oauth_uid."'";
    $result = $db->query($query);
    
    if($result->num_rows > 0){ 
        // Update user data if already exists
        $query = "UPDATE users_google SET first_name = '".$first_name."', last_name = '".$last_name."', email = '".$email."', gender = '".$gender."', locale = '".$locale."', picture = '".$picture."', link = '".$link."', modified = NOW() WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$oauth_uid."'";
        $update = $db->query($query);
    }else{
        // Insert user data
        $query = "INSERT INTO users_google VALUES (NULL, '".$oauth_provider."', '".$oauth_uid."', '".$first_name."', '".$last_name."', '".$email."', '".$gender."', '".$locale."', '".$picture."', '".$link."', NOW(), NOW())";
        $insert = $db->query($query);
    }
    
    return true;
}
?>