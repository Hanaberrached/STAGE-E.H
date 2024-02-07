$('.stars i').on('click', function(){
  let rating =parseInt($(this).data('id'))
  let currentConsultationId= $(this).parent().parent().parent().data('id')
  $(this).addClass('active');
  $(this).prevAll('i').addClass('active');
  $(this).nextAll('i').removeClass('active');
})
