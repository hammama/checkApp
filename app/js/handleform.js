function hideTextArea(param) {
    switch (param) {
        case 'robot':
            document.getElementById("descriptionRobot").className = "d-none";
            document.getElementById("stateRobot").className = "d-flex justify-content-center mt-10 text-success";
            break;
        case 'oceane':
            document.getElementById("descriptionOceane").className = "d-none";
            document.getElementById("stateOceane").className = "d-flex justify-content-center mt-10 text-success";
            break;
        case 'anritsu':
            document.getElementById("descriptionAnritsu").className = "d-none";
            document.getElementById("stateAnritsu").className = "d-flex justify-content-center mt-10 text-success";
            break;
        case 'grafana':
            document.getElementById("descriptionGrafana").className = "d-none";
            document.getElementById("stateGrafana").className = "d-flex justify-content-center mt-10 text-success";
            break;
        case 'patrol':
            document.getElementById("descriptionPatrol").className = "d-none";
            document.getElementById("statePatrol").className = "d-flex justify-content-center mt-10 text-success";
            break;
        case 'astreinte':
            document.getElementById("descriptionAstreinte").className = "d-none";
            document.getElementById("stateAstreinte").className = "d-flex justify-content-center mt-10 text-success";
            break;
        case 'action':
            document.getElementById("descriptionAction").className = "d-none";
            document.getElementById("stateAction").className = "d-flex justify-content-center mt-10 text-success";
            break;
        default: break;
    }
}
function showTextArea(param) {
    switch (param) {
        case 'robot':
            document.getElementById("descriptionRobot").className = "d-block";
            document.getElementById("stateRobot").className = "d-flex justify-content-center mt-10 text-danger";
            break;
        case 'oceane':
            document.getElementById("descriptionOceane").className = "d-block";
            document.getElementById("stateOceane").className = "d-flex justify-content-center mt-10 text-danger";
            break;
        case 'anritsu':
            document.getElementById("descriptionAnritsu").className = "d-block";
            document.getElementById("stateAnritsu").className = "d-flex justify-content-center mt-10 text-danger";
            break;
        case 'grafana':
            document.getElementById("descriptionGrafana").className = "d-block";
            document.getElementById("stateGrafana").className = "d-flex justify-content-center mt-10 text-danger";
            break;
        case 'patrol':
            document.getElementById("descriptionPatrol").className = "d-block";
            document.getElementById("statePatrol").className = "d-flex justify-content-center mt-10 text-danger";
            break;
        case 'astreinte':
            document.getElementById("descriptionAstreinte").className = "d-block";
            document.getElementById("stateAstreinte").className = "d-flex justify-content-center mt-10 text-danger";
            break;
        case 'action':
            document.getElementById("descriptionAction").className = "d-block";
            document.getElementById("stateAction").className = "d-flex justify-content-center mt-10 text-danger";
            break;
        default: break;
    }
}


function send(title) {
    //here you can make a post query to your php side, and the php will send the email
    console.log('docker description: ', document.getElementById("descriptiondock").value);
    console.log('kubernetes description: ', document.getElementById("descriptionkub").value);

    var data = {
        "type": title,
        "dockerDescription": document.getElementById("descriptiondock").value,
        "kubernetesDescription": document.getElementById("descriptionkub").value
    };


    console.log('data: ', data);

    /***
     * in post function you will send data to index.php then you'll add condition ex: isset($_POST['title'])
     * then you'll add php code to send email to your static emails
     */
    /*
    $.post("/", function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
      });
    */
}