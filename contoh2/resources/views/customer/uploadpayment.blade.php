<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP File Upload</title>
</head>
<body>
    <style>
      .picker-content{
        height:300px;
        width:200px;
      }
    </style>
    <script src="//static.filestackapi.com/filestack-js/3.x.x/filestack.min.js"></script>
    <!-- <script type="text/javascript">
        function PickerUploadDoneCallback() {
            window.history.back();
        }
      document.addEventListener("DOMContentLoaded", function(event) { 
        const client = filestack.init('AUnGYR2GyQHq2Z5CcBjiZz'); 

        let options = {
          "displayMode": "inline",
          "container": ".picker-content",
          "accept": [
            "image/jpeg",
            "image/jpg",
            "image/png"
          ],
          "fromSources": [
            "local_file_system"
          ],
          "uploadInBackground": false,
          "onUploadDone": (res) => console.log(res),
          "onUploadDone": PickerUploadDoneCallback,
        };
        picker = client.picker(options);
        picker.open();
      });
    </script> -->
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(event) {
            const client = filestack.init('AUnGYR2GyQHq2Z5CcBjiZz');

            let options = {
                onFileUploadFinished(file) {
                    var url = new URL(file.url);
                    var id = document.getElementById("orderId").value
                    // /home/booking/{booking_id}/upload/{url}
                   
                    window.location.href = "/home/booking/" + id +"/upload"+ url.pathname;

                },
                onFileSelected: file => {
                    // If you throw any error in this function it will reject the file selection.
                    // The error message will be displayed to the user as an alert.
                    if (file.size > 3000 * 1000) {
                        throw new Error('File too big, select something smaller than 3MB');
                    }
                },
                "transformations": {
                    "crop": false,
                    "circle": false,
                    "rotate": true
                },
                "displayMode": "inline",
                "container": ".picker-content",
                "accept": [
                    "image/jpeg",
                    "image/jpg",
                    "image/png"
                ],
                "fromSources": [
                    "local_file_system"
                ],
                "uploadInBackground": false,

            };
            client.picker(options).open();
        });
        </script>
    <div class="picker-content">
      <input type="hidden" id="orderId" value="{{$booking->booking_id}}">
    </div>
</body>
</html>