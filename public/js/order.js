$(document).ready(function () {

    let $app = $('#app'),
        $accordion = $app.find('#accordion'),
        lastCardId = 0;

    let changeAmountValueBySpin = function (changeValue, $triggerButtonElem) {

        const minValue = 0;

        let $input = $triggerButtonElem.closest('.amount-spin').find('input'),
            prevValue = +$input.val(),
            currentValue = prevValue + changeValue;

        if (currentValue >= minValue) {
            $input.val(currentValue);
        }
    };


    let transformAccordionCardToClone = function ($card) {

        let $cardHeader = $card.find('.card-header'),
            $collapseButton = $cardHeader.find('a[data-toggle="collapse"]'),
            $collapseBody = $card.find('.collapse');

        lastCardId++;

        $cardHeader.attr('id', 'heading' + lastCardId);
        $collapseButton.attr('data-target', '#collapse' + lastCardId).attr('aria-controls', 'collapse' + lastCardId);
        $collapseBody.removeClass('show').attr('id', 'collapse' + lastCardId).attr('aria-labelledby', 'heading' + lastCardId);

        return $card;
    };

    $accordion.on('click', '.up-amount-spin', function (event) {
        event.preventDefault();
        changeAmountValueBySpin(5, $(this));
    });

    $accordion.on('click', '.down-amount-spin', function (event) {
        event.preventDefault();
        changeAmountValueBySpin(-5, $(this));
    });


    $app.on('click', '.add-element-to-order', function (event) {
        event.preventDefault();

        let $card = $accordion.find('.card').first().clone(),
            $transformedCard = transformAccordionCardToClone($card);

        $transformedCard.appendTo($accordion);
        $transformedCard.find('.card-header a[data-toggle="collapse"]').trigger('click');
    });

    $accordion.on('click', '.delete-element', function (event) {
        event.preventDefault();

        if ($accordion.find('.card').length > 1) {
            $(this).closest('.card').remove();
        }
    });

});