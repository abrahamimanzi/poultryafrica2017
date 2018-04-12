<style>
    .cropit-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 200px;
        height: 200px;
    }

    .cropit-preview-image-container {
        cursor: move;
    }
</style>

      
    <div class="image-editor">
        <div class="row">
            <div class="col-sm-4" style="padding: 5px">
                <div class="cropit-preview"></div>
            </div>
            <div class="col-sm-4" style="padding: 5px">
                <div style="padding: 0px 5px;" class="img_control_div">
                  <div class="image-size-label">
                    Resize image
                  </div>
                    <input type="range" class="cropit-image-zoom-input"><br>
                    <span class="btn btn-default rotate-ccw"><i class="fa fa-undo"></i></span>
                    <span class="btn btn-default rotate-cw"><i class="fa fa-repeat"></i></span>
                    <!-- <br><br> -->
                    <input type="file" class="filestyle cropit-image-input" data-size="sm" data-input="false" data-buttonText="Select Photo">
                    <!-- <br> -->
                    <span class="btn btn-default cancel_img">Cancel</span>
                    <span class="btn btn-default save_img">Save</span>
                    <textarea name="register-photo" class="prof_photo" style="display: none"></textarea>
                </div>
            </div>
            <div class="col-sm-4" style="padding: 5px">
                <div style="padding: 0px 5px;">
                    <?php if(!$session_subscriber->isLoggedIn()){?> 
                    <div class="image-size-label">
                        Photograph requirements
                    </div>
                    <!-- <br> -->
                    <ul>
                        <li>Colour photograph</li>
                        <li>Taken within the last five years</li>
                        <li>Neutral backround</li>
                        <li>Maximum size: 250</li>
                        <li>Format: jpg file</li>
                        <li>No hats, sunglasses, dark glasses, headphones,  wireless hands-free devices or similar items, jewellery or gamments of any sort that obstruct the view of the face, <br><span class="ro_bold" data-toggle="modal" data-target="#photoSpecModal_1" style="cursor: pointer">View More</span></li>
                    </ul>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>

    <script>
      $(function() {
          if (typeof(Storage) !== "undefined" && localStorage.profile) {
            $('.image-editor').cropit({
              imageState: {
                src: localStorage.profile,
              },
            });
              
            $('.prof_photo').val(localStorage.profile);
          }else{
            $('.image-editor').cropit({
              imageState: {
                src: "",
              },
            });
          }

        $('.rotate-cw').click(function() {
          $('.image-editor').cropit('rotateCW');
        });
        $('.rotate-ccw').click(function() {
          $('.image-editor').cropit('rotateCCW');
        });

        $('.save_img').click(function() {
          var imageData = $('.image-editor').cropit('export');
            $('.prof_photo').val(imageData);
            if (typeof(Storage) !== "undefined") {
                localStorage.profile = imageData;
            }
            $('.save_img').attr('disabled',true);
            //$('.img_control_div').hide();
        });
        $('.cancel_img').click(function() {
            $('.prof_photo').val('');
            if (typeof(Storage) !== "undefined") {
                localStorage.profile = '';
            }
            $('.save_img').attr('disabled',false);
            $('.cropit-preview-image').prop('src','');
            
        });
      });
    </script>