<?php include 'inc/header.php'; ?>

<div id="app">
    <div class="d-flex align-items-center">
        <a href="#settings_window" class="settings-btn">
            <img src="<?= $data->home_url ?>/static/icons/Icon_Settings.webp" alt="Icon Settings">
        </a>
        <img src="<?= $data->home_url ?>/static/images/UI_ImgTab_Travels3_1.png" alt="">
    </div>
    <h1 class="page-title"><?= $data->chosenMelody->name ?></h1>
    <div class="cur-word"></div>
    <div class="lyre">
        <div class="lyre__line lyre__line1">
            <div class="lyre__key" id="q">
                <img src="static/icons/do.svg" alt="Do" class="lyre__key-image">
                <span class="lyre__key-name">Q</span>
            </div>

            <div class="lyre__key" id="w">
                <img src="static/icons/re.svg" alt="Re" class="lyre__key-image">
                <span class="lyre__key-name">W</span>
            </div>

            <div class="lyre__key" id="e">
                <img src="static/icons/mi.svg" alt="Mi" class="lyre__key-image">
                <span class="lyre__key-name">E</span>
            </div>

            <div class="lyre__key" id="r">
                <img src="static/icons/fa.svg" alt="Fa" class="lyre__key-image">
                <span class="lyre__key-name">R</span>
            </div>

            <div class="lyre__key" id="t">
                <img src="static/icons/so.svg" alt="So" class="lyre__key-image">
                <span class="lyre__key-name">T</span>
            </div>

            <div class="lyre__key" id="y">
                <img src="static/icons/la.svg" alt="La" class="lyre__key-image">
                <span class="lyre__key-name">Y</span>
            </div>

            <div class="lyre__key" id="u">
                <img src="static/icons/ti.svg" alt="Ti" class="lyre__key-image">
                <span class="lyre__key-name">U</span>
            </div>
        </div>

        <div class="lyre__line lyre__line2">
            <div class="lyre__key" id="a">
                <img src="static/icons/do.svg" alt="Do" class="lyre__key-image">
                <span class="lyre__key-name">A</span>
            </div>

            <div class="lyre__key" id="s">
                <img src="static/icons/re.svg" alt="Re" class="lyre__key-image">
                <span class="lyre__key-name">S</span>
            </div>

            <div class="lyre__key" id="d">
                <img src="static/icons/mi.svg" alt="Mi" class="lyre__key-image">
                <span class="lyre__key-name">D</span>
            </div>

            <div class="lyre__key" id="f">
                <img src="static/icons/fa.svg" alt="Fa" class="lyre__key-image">
                <span class="lyre__key-name">F</span>
            </div>

            <div class="lyre__key" id="g">
                <img src="static/icons/so.svg" alt="So" class="lyre__key-image">
                <span class="lyre__key-name">G</span>
            </div>

            <div class="lyre__key" id="h">
                <img src="static/icons/la.svg" alt="La" class="lyre__key-image">
                <span class="lyre__key-name">H</span>
            </div>

            <div class="lyre__key" id="j">
                <img src="static/icons/ti.svg" alt="Ti" class="lyre__key-image">
                <span class="lyre__key-name">J</span>
            </div>
        </div>

        <div class="lyre__line lyre__line3">
            <div class="lyre__key" id="z">
                <img src="static/icons/do.svg" alt="Do" cla
                ss="lyre__key-image">
                <span class="lyre__key-name">Z</span>
            </div>

            <div class="lyre__key" id="x">
                <img src="static/icons/re.svg" alt="Re" class="lyre__key-image">
                <span class="lyre__key-name">X</span>
            </div>

            <div class="lyre__key" id="c">
                <img src="static/icons/mi.svg" alt="Mi" class="lyre__key-image">
                <span class="lyre__key-name">C</span>
            </div>

            <div class="lyre__key" id="v">
                <img src="static/icons/fa.svg" alt="Fa" class="lyre__key-image">
                <span class="lyre__key-name">V</span>
            </div>

            <div class="lyre__key" id="b">
                <img src="static/icons/so.svg" alt="So" class="lyre__key-image">
                <span class="lyre__key-name">B</span>
            </div>

            <div class="lyre__key" id="n">
                <img src="static/icons/la.svg" alt="La" class="lyre__key-image">
                <span class="lyre__key-name">N</span>
            </div>

            <div class="lyre__key" id="m">
                <img src="static/icons/ti.svg" alt="Ti" class="lyre__key-image">
                <span class="lyre__key-name">M</span>
            </div>
        </div>
    </div>
</div>

<div class="remodal" data-remodal-id="settings_window">
    <div class="modal-border">
        <img class="modal-decor-corner modal-decor-corner_top_left" src="<?= $data->home_url ?>/static/images/left-top-corner.png" alt="">
        <img class="modal-decor-corner modal-decor-corner_top_right" src="<?= $data->home_url ?>/static/images/right-top-corner.png" alt="">
        <div class="modal-body">
            <div class="modal-header">
                <h2 class="modal-title">Choose melody to play to</h2>
                <a href="#" data-remodal-action="close" class="modal-close">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="16" cy="16" r="16" fill="#3B4255"/>
                        <path d="M7.11108 14.4602C10.5448 12.2744 12.7209 10.9207 15.6847 7.11108C15.2564 8.93482 15.1035 9.98073 15.1035 11.8005C26.874 10.1207 30.1437 24.8889 12.9237 24.8889C25.4935 24.3989 24.331 14.9501 15.1035 16.14C15.1035 17.8197 15.2219 18.862 15.6847 20.4794C12.5428 17.3195 10.7077 15.9442 7.11108 14.4602Z" fill="#ECE5D8"/>
                    </svg>
                </a>
            </div>

            <ul class="melodies-list">
                <?php foreach ($data->melodiesList as $melody): ?>
                    <li>
                        <a class="<?= $melody->id == isset($_GET['melody_id']) && $_GET['melody_id'] == $melody->id || !isset($_GET['melody_id']) && $melody->id == 1 ? 'active' : ''; ?>" href="<?= $data->home_url ?>?melody_id=<?= $melody->id ?>"><?= $melody->name; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <img class="modal-decor-corner modal-decor-corner_bottom_left" src="<?= $data->home_url ?>/static/images/left-bottom-corner.png" alt="">
        <img class="modal-decor-corner modal-decor-corner_bottom_right" src="<?= $data->home_url ?>/static/images/right-bottom-corner.png" alt="">
    </div>
</div>

<script>
    var melodyOriginal = <?= $data->chosenMelody->notes ?>

    for (var i = 0; i < melodyOriginal.length; i++)
        melodyOriginal[i] = melodyOriginal[i].split('')

    var totalCounter = 0
    for (var i = 0; i < melodyOriginal.length; i++){    
        document.querySelector('.cur-word').innerHTML += "<span class='cur-word__word'>"
        for (var j = 0; j < melodyOriginal[i].length; j++){
            document.querySelectorAll('.cur-word__word')[i].innerHTML += "<span id='letter_"+totalCounter+"' class='cur-word__letter'>"+melodyOriginal[i][j].toUpperCase()+"</span>"
            totalCounter++
        }
        document.querySelector('.cur-word').innerHTML += "</span>"
    }
            
    const melody = <?= $data->chosenMelody->notes ?>.join('').toLowerCase().split('')
    console.log(melody)
    var availableKeys = 'qwertyuasdfghjzxcvbnm'.split('')
    var counter=0

    document.getElementById(melody[counter]).classList.add('active')

    window.addEventListener('keydown', function(e){
        var key = e.key

        if (!availableKeys.includes(key)) return false
        if (key!=melody[counter]) return false
        if (counter==melody.length) location.reload()

        var audio = new Audio(`<?= $data->home_url; ?>/static/audio/${e.key}.mp3`)
        audio.play()

        document.getElementById('letter_'+counter).classList.add('active')
        document.getElementById(melody[counter]).classList.remove('active')

        if (counter <= melody.length){
            counter++
            document.getElementById(melody[counter]).classList.add('active')
        }

    });  
</script>

<?php include 'inc/footer.php'; ?>
