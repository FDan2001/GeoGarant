var header="";
var opis="";
$("#form").submit(function (e) { // Устанавливаем событие отправки для формы с id form
           e.preventDefault();
            //var form_data = $(this).serialize(); // Собираем все данные из формы
            var name = '';
            var phone = '';
            var email = '';
            var message = '';
            var form = document.forms.form;

            name = form.elements.name.value;
            phone = form.elements.phone.value;
            email = form.elements.email.value;
            message = form.elements.message.value;

        if (name.trim()!='' && phone.trim()!='' && email.trim()!='' && message.trim()!='') {

            $.ajax({
                url: 'php/sendform.php',
                method: 'post',
                dataType: 'html',
                data: {name: name, phone: phone, email: email, message: message},
                success: function(data){
                    if(data=="Заявка успешно отправлена!"){
                        var msg = document.getElementById("msg");
                        document.getElementById("header-msg").textContent="Заявка успешно отправлена!";
                        document.getElementById("opis-msg").textContent="Мы свяжемся с вами в ближайшее время";
                        msg.className = "msg-active";
                        document.body.classList.add("noscroll");
                    }else{
                        var msg = document.getElementById("msg");
                        var close = document.getElementById("close");
                        document.getElementById("header-msg").textContent="Ошибка!";
                        document.getElementById("opis-msg").textContent="Заявка не отправлена!";
                        close.classList.add("error");
                        document.getElementById("content-msg").classList.add("error");
                        msg.className = "msg-active";
                        document.body.classList.add("noscroll");
                    }
                },
                error: function (jqXHR, exception) {
                    if (jqXHR.status === 0) {
                        alert('Нет подключения к интернету!');
                    } else if (jqXHR.status == 404) {
                        alert('Страница не найдена(404).');
                    } else if (jqXHR.status == 500) {
                        alert('Внутренняя ошибка сервера (500).');
                    } else if (exception === 'parsererror') {
                        alert('Не удалось выполнить анализ JSON.');
                    } else if (exception === 'timeout') {
                        alert('Ошибка тайм-аута.');
                    } else if (exception === 'abort') {
                        alert('Ajax-запрос прерван.');
                    } else {
                        alert('Неперехваченная ошибка. ' + jqXHR.responseText);
                    }
                }
            });
        }else{
            header="Заполните все поля!";
            alert(header);
        }
});

function msgclose(){
    var msg = document.getElementById("msg");
    var close = document.getElementById("close");
    document.getElementById("header-msg").textContent="";
    document.getElementById("opis-msg").textContent="";
    document.getElementById("content-msg").className="content-msg";
    close.className="close";
    msg.className = "msg";
    document.getElementById("name").value = "";
    document.getElementById("phone").value = "";
    document.getElementById("email").value = "";
    document.getElementById("message").value = "";
    document.body.classList.remove("noscroll");
}

function msgliclose(){
    var msglic = document.getElementById("msg-lic");
    msglic.className = "msg";
    var contents = document.querySelectorAll(".content-lic");
    for (var i = 0; i < contents.length; i++) {
        contents[i].classList.add("closelic");
    }
    document.body.classList.remove("noscroll");
    index=0;
}
var index=0;
function openlic(index){
    document.body.classList.add("noscroll");
    var msglic = document.getElementById("msg-lic");
    msglic.className = "msg-active";
    if(index!=0){
        openlicdiv(index);
    }
}

/////phoneValid

  function setCursorPosition(pos, e) {
    e.focus();
    if (e.setSelectionRange) e.setSelectionRange(pos, pos);
    else if (e.createTextRange) {
      var range = e.createTextRange();
      range.collapse(true);
      range.moveEnd("character", pos);
      range.moveStart("character", pos);
      range.select()
    }
  }

  function mask(e) {
    var matrix = this.placeholder,
        i = 0,
        def = matrix.replace(/\D/g, ""),
        val = this.value.replace(/\D/g, "");
    def.length >= val.length && (val = def);
    matrix = matrix.replace(/[_\d]/g, function(a) {
      return val.charAt(i++) || "_"
    });
    this.value = matrix;
    i = matrix.lastIndexOf(val.substr(-1));
    i < matrix.length && matrix != this.placeholder ? i++ : i = matrix.indexOf("_");
    setCursorPosition(i, this)
  }
  function iphone() {
    var input = document.querySelector("#phone");
    input.addEventListener("input", mask, false);
    input.focus();
    setCursorPosition(3, input);
  };

/////karusel

  function Prev(){

    var radio = document.getElementsByName("rad");

    for( i = 0; i < radio.length; i++ ) {
        if( radio[i].checked && i!=0) {
            radio[i].checked = false;
            radio[i-1].checked = true;
            break;
        }
        if(radio[i].checked && i==0){
        	radio[i].checked = false;
            radio[4].checked = true;
            break;
        }
    }
}

  function Next(){

    var radio = document.getElementsByName("rad");

    for( i = 0; i < radio.length; i++ ) {
        if( radio[i].checked && i!=4) {
            radio[i].checked = false;
            radio[i+1].checked = true;
            break;
        }
        if(radio[i].checked && i==4){
        	radio[i].checked = false;
            radio[0].checked = true;
            break;
        }
    }
}

var carousele = document.getElementById("carousel");
var startX, endX;

carousele.addEventListener("mousedown", function(event) {
    startX = event.clientX;
});

carousele.addEventListener("mousemove", function(event) {
    endX = event.clientX;
});

carousele.addEventListener("mouseup", function(event) {
    if (startX < endX) {
        Prev();
    }
    else if (startX > endX) {
        Next();
    }
});
var startX, endX;

carousele.addEventListener("touchstart", function(event) {
  startX = event.touches[0].clientX;
});

carousele.addEventListener("touchmove", function(event) {
    endX = event.touches[0].clientX;
});

carousele.addEventListener("touchend", function(event) {
    // Проверяем, насколько сильно пользователь сместил палец вправо при касании
    if (startX < endX && (endX - startX) > 50) {
        Prev();
    }
    else if (startX > endX && (endX - startX) < 50) {
        Next();
    }

});


var provopen=0;

function openmenu(){
    if (provopen==0) {
        var slang = document.getElementById("slang");
        slang.style.marginTop="340px";
        provopen=1;
    }
    else{
        var slang = document.getElementById("slang");
        slang.style.marginTop="0px";
        provopen=0;
    }
}

let lastX = 0; // последнее положение мыши

// функция для обработки события перемещения мыши на слайдере
function moveSlide(event) {
  const x = event.clientX; // текущее положение мыши
  const r = lastX - x; // расстояние, на которое переместилась мышь
  const slider = document.querySelector(".slide-objects");

  // обновляем положение слайдера
  slider.scrollLeft += r;

  // запоминаем последнее положение мыши
  lastX = x;
}

// функция для включения обработки события перемещения мыши на слайдере
function enableMouseSlide() {
  const slider = document.getElementById('slide-objects');
  if (slider) {
    slider.addEventListener("mousedown", (event) => {
      lastX = event.clientX;
      slider.addEventListener("mousemove", moveSlide);
    });
    slider.addEventListener("mouseup", () => {
      slider.removeEventListener("mousemove", moveSlide);
    });
    slider.addEventListener("mouseleave", () => {
      slider.removeEventListener("mousemove", moveSlide);
    });
  }
}
enableMouseSlide();


const images = document.querySelectorAll('img');

images.forEach((image) => {
  image.draggable = false;
});

function openlicdiv(index) {
  var contents = document.querySelectorAll(".content-lic");

  for (var i = 0; i < contents.length; i++) {
    if (i + 1 == index) {
      if (contents[i].classList.contains("closelic")) {
        contents[i].classList.remove("closelic");
      } else {
        contents[i].classList.add("closelic");
      }
    } else {
      contents[i].classList.add("closelic");
    }
  }
}