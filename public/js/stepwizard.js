$(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();
  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this).closest('a');
     console.log($target);
      if (!$item.hasClass('disabled')) {
          console.log("true")
          navListItems.addClass('btn-dark-blue');
          $item.addClass('btn-dark-blue');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
          //console.log("1"+$target.find('input:eq(0)').focus());
      }
  });

  allNextBtn.click(function(){
      console.log("clicked next");
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;
          console.log("current step"+curStepBtn);
          console.log(nextStepWizard)
      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
              console.log(curInputs[i])
        }
          console.log(curInputs.length)
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-dark-blue').trigger('click');
});