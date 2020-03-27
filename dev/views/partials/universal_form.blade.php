
{{--<div id="ajaxForm">
<form class="container feetback pb-5" id="form-feetback">
    <div class="row">
        <div class="col-12 col-md-4">
            <h2 class="title--1">{{ $title }}</h2>
            <p class="text--1">{{ $description }}</p>
            <div class="checkbox--wrapper">
                <label class="checkbox--wrapper_label">
                    <input class="checkbox" type="checkbox" name="date-processing" value="true" required="">
                    <span class="checkbox-custom"></span>
                    <span class="px-2 label" for="checkbox">Я согласен с <a class="text--link-red" href="#">условиями</a> обработки персональных данных</span>
                </label>
            </div>
        </div>
        <div class="col-12 col-md-8 ">
            <div class="feetback__input-group-items">
                <input type="text" name="name" eform="Имя пользователя:name:1" class="feetback__input_name my-input" required placeholder="Имя">
                <input type="tel"  name="phone"  eform="Телефон:phone:1" class="feetback__input_phone my-input" placeholder="Телефон">
                <input type="email"  name="email"  eform="Адрес электронной почты:email:1" class="feetback__input_email my-input" required placeholder="E-mail">
                <textarea rows="5" name="message"  eform="Сообщение:message:1" class="feetback__input_message my-input" placeholder="Вопрос"></textarea>
            </div>
            <div class="d-flex w-100 justify-content-around my-4">
                <button type="submit" class="my-btn-red">Отправить<i class="zmdi zmdi-arrow-right ml-4"></i></button>
            </div>
        </div>
    </div>
</form>
</div>--}}

{{--<div id="ajax-form">
    {!! $modx->runSnippet('eForm',[
    'from' => 'info@homeartidea.com',
    'formid' => 'form-feetback',
    'subject' => 'Форма обратной связи с сайта [(site_name)]!',
    'tpl' => 'tpl_base-form_feedback',
    'report' => 'tpl_base-form_feedback-report',
    'thankyou' => 'tpl_form_thank-you',
    'errorTpl' => 'tpl_form_error',
    'to' => 'info@homeartidea.com',
    'cc' => 'burosd@yandex.ru',
    'debug' => '1'
    ]) !!}
</div>--}}
{{--<div id="ajax-form">
    <div class="container">
        @evoParser(' [!eForm?
        &formid=`feedbackForm`
        &subject=`Сообщение с сайта`
        &tpl=`eFeedbackForm`
        &report=`eFeedbackReport`
        &gotoid=`[*id*]`
        &vericode=`1`
        &to=`info@homeartidea.com`
        &cc=`burosd@yandex.ru`,
        &debug=`1`
        !] ')
    </div>
</div>--}}

<div id="ajaxForm">
    <form id="EmailForm" class="container feetback pb-5">
        <input type="hidden" name="formid" value="ContactForm">
        <div class="row">
            <div class="col-12 col-md-4">
                <h2 class="title--1">{{ $title }}</h2>
                <p class="text--1">{{ $description }}</p>
                <div class="checkbox--wrapper">
                    <label class="checkbox--wrapper_label">
                        <input class="checkbox" type="checkbox" name="date-processing" value="true" required="">
                        <span class="checkbox-custom"></span>
                        <span class="px-2 label" for="checkbox">Я согласен с <a class="text--link-red" href="#">условиями</a> обработки персональных данных</span>
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-8 ">
                <div class="feetback__input-group-items">
                    <input type="text" name="name" value="@evoParser('[+name.value+]')" class="feetback__input_name my-input" required placeholder="Имя">
                    {{--<div class="invalid-feedback">@evoParser('[+name.error+]')</div>--}}
                    <input type="tel"  name="phone"  value="@evoParser('[+phone.value+]')" class="feetback__input_phone my-input" placeholder="Телефон">
                    {{--<div class="invalid-feedback">@evoParser('[+phone.error+]')</div>--}}
                    <input type="email"  name="email" value="@evoParser('[+email.value+]')" class="feetback__input_email my-input" required placeholder="E-mail">
                    {{--<div class="invalid-feedback">@evoParser('[+email.error+]')</div>--}}
                    <textarea rows="5" name="message"  value="@evoParser('[+message.value+]')" class="feetback__input_message my-input" placeholder="Вопрос"></textarea>
                    {{--<div class="invalid-feedback">@evoParser('[+message.error+]')</div>--}}
                </div>
                <div class="d-flex w-100 justify-content-around my-4">
                    <button type="submit" class="my-btn-red" id="submit">Отправить<i class="zmdi zmdi-arrow-right ml-4"></i></button>
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
  //see plugin evoAjax
  $(document).on('submit','#ajaxForm form',function(ev){
    var frm = $('#ajaxForm form');
    $('#submit').prop( "disabled", true );
    $.ajax({
      type: 'post',
      url: 'http://homeartidea.com/feedbackajaxform',
      data: frm.serialize(),
      success: function (data) {
        $('#ajaxForm').empty();
        $('#ajaxForm').html( data );
      }
    });
    ev.preventDefault();
  });
</script>
