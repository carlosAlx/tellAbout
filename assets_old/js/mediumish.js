/*
$(function () {
  var topOfOthDiv = $(".hideshare").offset().top;
  $(window).scroll(function () {
    if ($(window).scrollTop() > topOfOthDiv) { //scrolled past the other div?
      $(".share").hide(); //reached the desired point -- show div
    }
    else {
      $(".share").show();
    }
  });
}); */
const $ = document.querySelector.bind(document);
const previewImg = $('.preview-img');
const fileChooser = $('.file-chooser');

fileChooser.onchange = e => {
  const fileToUpload = e.target.files.item(0);
  const reader = new FileReader();

  // evento disparado quando o reader terminar de ler 
  reader.onload = e => previewImg.src = e.target.result;

  // solicita ao reader que leia o arquivo 
  // transformando-o para DataURL. 
  // Isso disparará o evento reader.onload.
  reader.readAsDataURL(fileToUpload);
};
