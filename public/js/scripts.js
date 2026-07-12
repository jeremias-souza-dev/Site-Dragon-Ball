    function verificar() {
        var char = document.getElementById('txtsel')
        var res = document.querySelector('div#res')
        if (char.value.length == 0 || char.value.length <= 3 || char.value.length > 13) {
            alert('Character name incorrect format, use only Letters, 4 characters min and max 12.')
        } else {
            var sex = document.getElementsByName('radsex')
            var voc = document.querySelector('select').value
            var char = document.getElementById('txtsel').value
            var img = document.createElement('img')

            sex.forEach((i) => {
                if (i.checked) {
                    sex = i.value
                    if (i.checked) {
                        img = img.value
                    }
                }
            })
            res.innerHTML = `The character <strong>${char}</strong> has been created. <p>You is <strong>${sex}</strong> and your vocation is <strong>${voc}.</strong>`
        }
    }