$('#page-link a[href*="*"]').click(function () {
  const href = $(this).attr('href');
  const position = $(href).offset().top;
  const speed = 500;
  $("html, body").animate({scrollTop: position}, speed, "swing");
  return false;
})