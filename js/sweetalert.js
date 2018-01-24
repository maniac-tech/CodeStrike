$(document).ready(function() {
      swal({
  title: 'CodeChef Certified DATA STRUCTURE AND ALGORITHMS PROGRAMME(CCDSAP)',
  text: 'Exam Date: 18 March 2018',
  imageUrl: 'https://s3.amazonaws.com/codechef_shared/sites/all/themes/abessive/logo.png',
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: 'Custom image',
  showCancelButton: true,
  confirmButtonText: 'Enroll now',
  confirmButtonColor: '#f44242',
  animation: false

},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "https://www.codechef.com/certification/about?ref=req_";
  }
});

});


