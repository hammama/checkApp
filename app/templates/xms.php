<?php include 'inc/header.php'; ?>
<h1 class="text-center mt-2"> <?php echo $title ?> </h1>
<p class="d-flex justify-content-center mt-10" id="statekub">Tickets Oceane</p>
<div class="d-flex justify-content-center w-100">
   <a href="https://calipso-oceane.sso.infra.ftgroup/binOceane/Home/StartPage"target="_blank"> <image src="assets/oceane.png" /></a>
   <br/>
</div>
<div class="d-flex justify-content-center">
    <div class="w-50">
        <!-- <form action=""> -->
        <div class="d-flex justify-content-center">
            <button class="w-25 btn btn-success mr-2" onclick="hideTextArea('oceane')">OK</button>
            <button class="w-25 btn btn-danger ml-2" onclick="showTextArea('oceane')">KO</button>
        </div>
        <div class="d-flex justify-content-center mt-2">
            <textarea id="descriptionOceane" class="d-none" name="descriptionOceane" rows="5" cols="33"></textarea>
        </div>
    </div>
</div>

<p class="d-flex justify-content-center mt-10" id="statedock">état Robots</p>
<div class="d-flex justify-content-center w-100 mt-2">
   <a href="http://ats-portail.si.francetelecom.fr/auth/login" target="_blank"> <image class="w-25" src="assets/robot.png" /> </a>
</div>
<div class="d-flex justify-content-center mt-2">
    <div class="w-50">
        <!-- <form action=""> -->
        <div class="d-flex justify-content-center">
            <button class="w-25 btn btn-success mr-2" onclick="hideTextArea('robot')">OK</button>
            <button class="w-25 btn btn-danger ml-2" onclick="showTextArea('robot')">KO</button>
        </div>
        <div class="d-flex justify-content-center mt-2">
            <textarea id="descriptionRobot" class="d-none" name="descriptionRobot" rows="5" cols="33"></textarea>
        </div>
    </div>
</div>
<p class="d-flex justify-content-center mt-10" id="statekub">Sondes Anritsu</p>
<div class="d-flex justify-content-center w-100">
   <a href="https://sonde-prod-asu.reseau.francetelecom.fr/portal/login?backurl=https%3A%2F%2Fsonde-prod-asu.reseau.francetelecom.fr%2Fportal%2Fapp%23" target="_blank"> <image src="assets/anritsu.png" /></a>
   <br/>
</div>
<div class="d-flex justify-content-center">
    <div class="w-50">
        <!-- <form action=""> -->
        <div class="d-flex justify-content-center">
            <button class="w-25 btn btn-success mr-2" onclick="hideTextArea('anritsu')">OK</button>
            <button class="w-25 btn btn-danger ml-2" onclick="showTextArea('anritsu')">KO</button>
        </div>
        <div class="d-flex justify-content-center mt-2">
            <textarea id="descriptionAnritsu" class="d-none" name="descriptionAnritsu" rows="5" cols="33"></textarea>
        </div>
    </div>
</div>
<p class="d-flex justify-content-center mt-10" id="statekub">Grafana XMS-GW</p>
<div class="d-flex justify-content-center w-100">
   <a href="https://opiumgrafana.sso.infra.ftgroup/"target="_blank"> <image src="assets/grafana.png" /></a>
   <br/>
</div>
<div class="d-flex justify-content-center">
    <div class="w-50">
        <!-- <form action=""> -->
        <div class="d-flex justify-content-center">
            <button class="w-25 btn btn-success mr-2" onclick="hideTextArea('grafana')">OK</button>
            <button class="w-25 btn btn-danger ml-2" onclick="showTextArea('grafana')">KO</button>
        </div>
        <div class="d-flex justify-content-center mt-2">
            <textarea id="descriptionGrafana" class="d-none" name="descriptionGrafana" rows="5" cols="33"></textarea>
        </div>
    </div>
</div>
<p class="d-flex justify-content-center mt-10" id="statekub">Alarmes Patrol</p>
<div class="d-flex justify-content-center w-100">
    <image src="assets/patrol.png" />
   <br/>
</div>
<div class="d-flex justify-content-center">
    <div class="w-50">
        <!-- <form action=""> -->
        <div class="d-flex justify-content-center">
            <button class="w-25 btn btn-success mr-2" onclick="hideTextArea('patrol')">OK</button>
            <button class="w-25 btn btn-danger ml-2" onclick="showTextArea('patrol')">KO</button>
        </div>
        <div class="d-flex justify-content-center mt-2">
            <textarea id="descriptionPatrol" class="d-none" name="descriptionPatrol" rows="5" cols="33"></textarea>
        </div>
    </div>
</div>
<p class="d-flex justify-content-center mt-10" id="statekub">Astreinte</p>
<div class="d-flex justify-content-center w-100">
    <image src="assets/astreinte.png" />
   <br/>
</div>
<div class="d-flex justify-content-center">
    <div class="w-50">
        <!-- <form action=""> -->
        <div class="d-flex justify-content-center">
            <button class="w-25 btn btn-success mr-2" onclick="hideTextArea('astreinte')">OK</button>
            <button class="w-25 btn btn-danger ml-2" onclick="showTextArea('astreinte')">KO</button>
        </div>
        <div class="d-flex justify-content-center mt-2">
            <textarea id="descriptionAstreinte" class="d-none" name="descriptionAstreinte" rows="5" cols="33"></textarea>
        </div>
    </div>
</div>
<p class="d-flex justify-content-center mt-10" id="statekub">Actions</p>
<div class="d-flex justify-content-center w-100">
    <image src="assets/action.png" />
   <br/>
</div>
<div class="d-flex justify-content-center">
    <div class="w-50">
        <!-- <form action=""> -->
        <div class="d-flex justify-content-center">
            <button class="w-25 btn btn-success mr-2" onclick="hideTextArea('action')">OK</button>
            <button class="w-25 btn btn-danger ml-2" onclick="showTextArea('action')">KO</button>
        </div>
        <div class="d-flex justify-content-center mt-2">
            <textarea id="descriptionAction" class="d-none" name="descriptionAction" rows="5" cols="33"></textarea>
        </div>
    </div>
</div>
<!-- test image paste -->
<div class="trumbowyg-editor" style="height: 135.588px; contenteditable="true">hello </div>
<textarea class=”content” name=”example” onpaste=”pasteImagetoEditor(this)” id=”txtEditor”></textarea>
<div class="d-flex justify-content-center w-100 mt-2">
    <?php echo '<button class="w-25 btn btn-success" onclick="send(\'' . $title . '\')">Send</button>' ?>
</div>
<?php include 'inc/footer.php'; ?>