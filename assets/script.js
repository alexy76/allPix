const upload = document.getElementById('upload');
const upfile = document.getElementById('upfile');


upload.addEventListener('click', e => {

    upload.classList.add('d-none');
    upfile.classList.replace('d-none', 'd-block');

})


fileToUpload.addEventListener("change", function () {

    let imageSend = new FileReader();
  
    imageSend.readAsDataURL(this.files[0]);
  
    imageSend.onload = () => {
      preview.src = imageSend.result;
    };
  
});
