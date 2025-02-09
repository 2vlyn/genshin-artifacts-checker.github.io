<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>원신 성유물 누가쓰지?</title>
    <meta name="description" content="성유물을 누가 쓰는지 궁금해서 갈아야하나 보관해야하나 망설였다면 누가 쓸수있는지 알려드립니다">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        p {
            margin: 0px; padding: 0px;
        }
        .radio-group {
            margin-bottom: 20px;
        }
        #artifact-select, #main-option-select, .sub-option-select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
        }
        #selection-section, #info-section {
            height: 100%;
        }
        #info-section {
            border: 1px solid black;
            padding: 0px;
        }
        #info-section img {
            max-width: 100%;
        }
        #artifact-name {
            background-color: #ca7233;
            color: white;
            padding: 5px 20px;
            font-size: 25px;
            font-weight: bold;
        }
        #artifact-info {
            background-color: #714f45;
            color: white;
            padding: 5px 20px;
            color: white;
        }
        #artifact-info p:first-child {
            font-weight: bold;
        }
        #artifact-info p:nth-child(2) {
            font-weight: bold;
            color: #c8beb7;
            margin: 30px 0px 0px 0px;
        }
        #artifact-info p:nth-child(3) {
            font-weight: bold;
            font-size: 40px;
            line-height: 30px;
        }
        #artifact-info p:last-child {
            color: #fed629;
            font-size: 20px;
        }
        #sub-options-info {
            background-color: #f0eade;
            padding: 10px 15px 10px 25px;
            font-weight: bold;
            color: #424242;
        }
        #artifacts-name {
            background-color: #f0eade;
            padding-left: 10px;
            color: #42983f;
        }
        #artifacts-2set {
            background-color: #f0eade;
            padding-left: 25px;
            padding-right: 15px;
            color: gray;
        }
        #artifacts-4set {
            background-color: #f0eade;
            padding-left: 25px;
            padding-right: 15px;
            color: gray;
            padding-bottom: 10px;
        }
        .dark-mode {
            background-color: #343a40;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h1>성유물 감정</h1>
        

        <div class="row mt-4">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" id="selection-section">
                <div class="form-group">
                    <h5>성유물 선택</h5>
                    <select id="artifact-select" class="form-control">
                        <option value="">성유물을 선택하세요</option>
                    </select>
                </div>

                <div class="form-group">
                    <h5>성유물 부위 선택</h5>
                    <!--
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <label class="btn btn-outline-secondary"><input type="radio" class="btn-check" name="artifact-part" value="flower">꽃</label>
                        <label class="btn btn-outline-secondary"><input type="radio" class="btn-check" name="artifact-part" value="feather">깃털</label>
                        <label class="btn btn-outline-secondary"><input type="radio" class="btn-check" name="artifact-part" value="sand">시계</label>
                        <label class="btn btn-outline-secondary"><input type="radio" class="btn-check" name="artifact-part" value="goblet">성배</label>
                        <label class="btn btn-outline-secondary"><input type="radio" class="btn-check" name="artifact-part" value="circlet">왕관</label>
                    </div>
                    -->
                    <div class="radio-group" id="part-select" disabled>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label"><input class="form-check-input" type="radio" name="artifact-part" value="flower">꽃</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label"><input class="form-check-input" type="radio" name="artifact-part" value="feather">깃털</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label"><input class="form-check-input" type="radio" name="artifact-part" value="sand">시계</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label"><input class="form-check-input" type="radio" name="artifact-part" value="goblet">성배</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label"><input class="form-check-input" type="radio" name="artifact-part" value="circlet">왕관</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <h5>주옵션 선택</h5>
                    <select id="main-option-select" class="form-control">
                        <option value="">성유물 부위를 선택해주세요.</option>
                    </select>
                </div>

                <div class="form-group">
                    <h5>부옵션 선택</h5>
                    <select class="sub-option-select form-control" id="sub-option-select-1">
                        <option value="">부옵션을 선택해주세요.</option>
                    </select>
                    <select class="sub-option-select form-control" id="sub-option-select-2">
                        <option value="">부옵션을 선택해주세요.</option>
                    </select>
                    <select class="sub-option-select form-control" id="sub-option-select-3">
                        <option value="">부옵션을 선택해주세요.</option>
                    </select>
                    <select class="sub-option-select form-control" id="sub-option-select-4">
                        <option value="">부옵션을 선택해주세요.</option>
                    </select>
                </div>

                <button id="submit-button" class="btn btn-primary col-lg mb-4" disabled>누가 쓰는 성유물인지 확인하기</button>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-3" id="info-section">
                <div id="artifact-name">성유물 이름</div>
                <div id="artifact-info"><p id="artifact-part">성유물부위</p><p></p><p id="main-option-info">주옵션</p><p>★★★★★</p></div>
                <div id="sub-options-info">부옵션</div>
                <div id="artifacts-name">성유물 세트 이름</div>
                <div id="artifacts-2set">성유물 2세트 효과</div>
                <div id="artifacts-4set">성유물 4세트 효과</div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" id="who-is-use-this">
            <!--
                <h5>사용 가능한 캐릭터</h5>
                <ul>
                    <li>세트효과 적용</li>
                    <ul>
                        <li>4옵</li>
                        <ul>
                            <li>호두</li>
                            <li>다이루크</li>
                        </ul>
                        <li>3옵</li>
                        <ul>
                            <li>호두</li>
                            <li>다이루크</li>
                        </ul>
                        <li>2옵</li>
                        <ul>
                            <li>호두</li>
                            <li>다이루크</li>
                        </ul>
                    </ul>
                    <br>
                    <li>세트효과 무시</li>
                    <ul>
                        <li>4옵</li>
                        <ul>
                            <li>호두</li>
                            <li>다이루크</li>
                        </ul>
                        <li>3옵</li>
                        <ul>
                            <li>호두</li>
                            <li>다이루크</li>
                        </ul>
                        <li>2옵</li>
                        <ul>
                            <li>호두</li>
                            <li>다이루크</li>
                        </ul>
                    </ul>
                </ul>
                -->
            </div>
        </div>
        
        <div class="mt-5 text-secondary" style="font-size:14px">
        <p>사이트 정보</p>
        성유물을 누가 쓰는지 궁금해서 갈아야하나 보관해야하나 망설이셨나요? 가지고있는 성유물 정보를 입력하면 누가 쓸수있는지 알려드립니다.<br>다만 최신 캐릭터, 최신 성유물, 최신 빌드는 아직 업데이트가 안됬을 수 있습니다. 또한 비주류 빌드는 알려드리지 않습니다.<br>
        해외서버를 사용중인데 한국DNS에서 간혈적으로 접속이 안되는 문제가 발생됩니다. 보조DNS를 1.1.1.1로 설정하면 해결됩니다.
        <p>정보 업데이트 2025/02/08</p>
        <a href="#"><p id="dark-mode-toggle">[다크모드 사용]</p></a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    

    <script>
        var selectedArtifactsParts = {};
        var selectedArtifactsPart = '';

        const partOfArtifacts = {flower:'생명의 꽃', feather:'죽음의 깃털', sand:'시간의 모래', goblet:'공간의 성배', circlet:'이성의 왕관'};

        const mainOptions = {
            flower: ['HP'],
            feather: ['공격력'],
            sand: ['공격력%', '원소 마스터리', 'HP%', '원소 충전 효율', '방어력%'],
            goblet: ['불 원소 피해 보너스', '물 원소 피해 보너스', '번개 원소 피해 보너스', '얼음 원소 피해 보너스', '바람 원소 피해 보너스', '바위 원소 피해 보너스', '풀 원소 피해 보너스', '물리 피해 보너스', '공격력%', '원소 마스터리', 'HP%', '방어력%'],
            circlet: ['치명타 확률', '치명타 피해', '공격력%', '원소 마스터리', 'HP%', '방어력%', '치유 보너스']
        };

        const subOptions = ['치명타 확률', '치명타 피해', '공격력%', '원소 마스터리', 'HP%', '원소 충전 효율', '방어력%', '공격력', 'HP', '방어력'];

        document.addEventListener('DOMContentLoaded', function() {
            
            fetch('get_artifacts.php')
                .then(response => response.json())
                .then(data => {
                    const artifactSelect = document.getElementById('artifact-select');
                    data.forEach(artifact => {
                        const option = document.createElement('option');
                        option.value = artifact.name;
                        option.textContent = artifact.name;
                        artifactSelect.appendChild(option);
                    });

                    
                    //자동선택 url parsing
                    let url = new URL(window.location.href);
                    let params = new URLSearchParams(url.search);

                    const partsReMapping = {
                        '생명의 꽃': 'flower',
                        '죽음의 깃털': 'feather',
                        '시간의 모래': 'sand',
                        '공간의 성배': 'goblet',
                        '이성의 왕관': 'circlet' };
                    
                    if(params.get('select_artifacts') != null) {document.getElementById("artifact-select").value = params.get('select_artifacts'); document.getElementById("artifact-select").dispatchEvent(new Event('change'));
                    if(params.get('select_parts') != null) {document.querySelectorAll('input[name="artifact-part"]').forEach(radio => { if(radio.value === partsReMapping[params.get('select_parts')]) {radio.checked = true; radio.dispatchEvent(new Event('change'));} });}
                    if(params.get('select_main') != null) {document.getElementById("main-option-select").value = params.get('select_main'); document.getElementById("main-option-select").dispatchEvent(new Event('change'));}
                    if(params.get('select_sub1') != null) {document.getElementById("sub-option-select-1").value = params.get('select_sub1'); document.getElementById("sub-option-select-1").dispatchEvent(new Event('change'));}
                    if(params.get('select_sub2') != null) {document.getElementById("sub-option-select-2").value = params.get('select_sub2'); document.getElementById("sub-option-select-2").dispatchEvent(new Event('change'));}
                    if(params.get('select_sub3') != null) {document.getElementById("sub-option-select-3").value = params.get('select_sub3'); document.getElementById("sub-option-select-3").dispatchEvent(new Event('change'));}
                    if(params.get('select_sub4') != null) {document.getElementById("sub-option-select-4").value = params.get('select_sub4'); document.getElementById("sub-option-select-4").dispatchEvent(new Event('change'));}
                    document.getElementById('submit-button').click();
                    }

                });

            document.getElementById('artifact-select').addEventListener('change', function() {
                const selectedArtifacts = this.value;
                if (selectedArtifacts) {
                    fetch('get_artifacts.php')
                        .then(response => response.json())
                        .then(data => {
                            const artifact = data.find(item => item.name == selectedArtifacts);
                            selectedArtifactsParts = {flower: artifact.flower, feather: artifact.feather, sand: artifact.sand, goblet: artifact.goblet, circlet: artifact.circlet};
                            if (artifact) {
                                document.getElementById('artifacts-name').innerHTML = `
                                    ${artifact.name}
                                `;
                                if(selectedArtifactsPart) document.getElementById('artifact-name').innerHTML = `${selectedArtifactsParts[selectedArtifactsPart]}`;
                                document.getElementById('artifacts-2set').innerHTML = `
                                    <p>2세트: ${artifact.set2}</p>
                                `;
                                document.getElementById('artifacts-4set').innerHTML = `
                                    <p>4세트: ${artifact.set4}</p>
                                `;
                                document.getElementById('part-select').querySelectorAll('input').forEach(input => {
                                    input.disabled = false;
                                });
                            }
                        });
                        if(selectedArtifactsPart) document.getElementById('submit-button').disabled = false;
                } else {
                    document.getElementById('artifacts-info').innerHTML = '';
                    document.getElementById('part-select').querySelectorAll('input').forEach(input => {
                        //input.disabled = true;
                    });
                }
            });

            document.querySelectorAll('input[name="artifact-part"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    const part = this.value;
                    selectedArtifactsPart = part;

                    document.getElementById('artifact-part').innerHTML = partOfArtifacts[part];
                    if(document.getElementById('artifact-select').value) document.getElementById('artifact-name').innerHTML = `${selectedArtifactsParts[selectedArtifactsPart]}`;

                    const mainOptionSelect = document.getElementById('main-option-select');
                    mainOptionSelect.disabled = false;
                    mainOptionSelect.innerHTML = '';
                    mainOptions[part].forEach(option => {
                        const opt = document.createElement('option');
                        opt.value = option;
                        opt.textContent = option;
                        mainOptionSelect.appendChild(opt);
                    });
                    document.getElementById('main-option-info').innerHTML = '';
                    document.querySelectorAll('.sub-option-select').forEach(select => {
                        select.innerHTML = '<option value="">부옵션을 선택해주세요.</option>';
                    });

                    if (mainOptionSelect.options.length > 0) {
                        mainOptionSelect.selectedIndex = 0;
                        const selectedOption = mainOptionSelect.value;
                        updateSubOptions(selectedOption);
                        document.getElementById('main-option-info').innerHTML = `
                            ${selectedOption}
                        `;
                        document.querySelectorAll('.sub-option-select').forEach(select => {
                            //select.disabled = false;
                        });
                    }

                    if(document.getElementById('artifact-select').value) document.getElementById('submit-button').disabled = false;
                });
            });

            document.getElementById('main-option-select').addEventListener('change', function() {
                const selectedOption = this.value;
                updateSubOptions(selectedOption);
                if (selectedOption) {
                    document.getElementById('main-option-info').innerHTML = `
                        ${selectedOption}
                    `;
                    const selectedSubOptions = Array.from(document.querySelectorAll('.sub-option-select'))
                        .filter(select => select.value)
                        .map(select => select.value);
                    document.getElementById('sub-options-info').innerHTML = `
                        ${selectedSubOptions.join('<br>')}
                    `;
                } else {
                    document.getElementById('main-option-info').innerHTML = '';
                    document.querySelectorAll('.sub-option-select').forEach(select => {
                        select.innerHTML = '<option value="">부옵션을 선택해주세요.</option>';
                    });
                }
                if(document.getElementById('artifact-select').value) document.getElementById('submit-button').disabled = false;
            });

            document.querySelectorAll('.sub-option-select').forEach(select => {
                select.addEventListener('change', function() {
                    updateSubOptions(document.getElementById('main-option-select').value);
                    const selectedSubOptions = Array.from(document.querySelectorAll('.sub-option-select'))
                        .filter(select => select.value)
                        .map(select => select.value);
                    document.getElementById('sub-options-info').innerHTML = `
                        ${selectedSubOptions.join('<br>')}
                    `;
                    if(document.getElementById('artifact-select').value) document.getElementById('submit-button').disabled = false;
                });
            });

            
            document.getElementById('submit-button').addEventListener('click', function() {
                document.getElementById('submit-button').disabled = true;

                const artifact = document.getElementById('artifact-select').value;
                const part = document.querySelector('input[name="artifact-part"]:checked').value;
                const selected_mainOption = document.getElementById('main-option-select').value;
                const selected_subOptions = Array.from(document.querySelectorAll('.sub-option-select'))
                    .filter(select => select.value)
                    .map(select => select.value);

                const formData = new FormData();
                formData.append('artifact', artifact);
                formData.append('part', part);
                formData.append('mainOption', selected_mainOption);
                formData.append('subOptions', selected_subOptions.join(','));

                try {
                    fetch('howto.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if(data.rst == 0) {
                            //alert('이 성유물 현재 아무 캐릭터도 사용할 수 없습니다.');
                            //alert('이 성유물은 쓰레기입니다.');
                            document.getElementById("who-is-use-this").innerHTML = "<h5>성유물 감정결과</h5>이 성유물은 쓰레기입니다.<br>당장 갈으셔도 좋습니다.<br>감사합니다.";
                        }
                        else {
                            function generateCharacterList(data, type) {
                                let listHTML = `<li>${type}</li><ul>`;
                                for (let i = 4; i >= 2; i--) {
                                    if (data[i].length > 0) {
                                        listHTML += `<li>옵션 ${i}개 유효</li><ul>`;
                                        data[i].forEach(characterObj => {
                                            listHTML += `<li>${characterObj.character_name}</li>`;
                                        });
                                        listHTML += `</ul>`;
                                    }
                                }
                                listHTML += `</ul>`;
                                return listHTML;
                            }
                            const whoisusethis = `
                                <h5>사용 가능한 캐릭터</h5>
                                <ul>
                                    ${generateCharacterList(data.mine, '세트효과 적용')}
                                    <br>
                                    ${generateCharacterList(data.other, '세트효과 무시')}
                                </ul>
                                <!--<button class="btn btn-success btn-sm mb-2 fa-1x" type="button" onclick="urlshare()"><i class="fas fa-share-alt"></i> 공유하기</button>-->
                            `;
                            document.getElementById("who-is-use-this").innerHTML = whoisusethis;
                        }
                    });
                } catch {
                    if(confirm("로봇인지 사람인지 확인해주세요.")) {
                        window.open('robot_check.htm', 'robotCheckWindow', 'width=300,height=200');
                    }
                }
            });

            document.getElementById('dark-mode-toggle').addEventListener('click', function() {
                const isDarkModeEnabled = getCookie('darkMode') === 'enabled';
                if (isDarkModeEnabled) {
                    disableDarkMode();
                } else {
                    enableDarkMode();
                }
            });
            function enableDarkMode() {
                document.body.classList.add('dark-mode');
                setCookie('darkMode', 'enabled', 365);
                document.getElementById('dark-mode-toggle').innerHTML='[다크모드 끄기]';
            }
            function disableDarkMode() {
                document.body.classList.remove('dark-mode');
                setCookie('darkMode', 'disabled', 365);
                document.getElementById('dark-mode-toggle').innerHTML='[다크모드 사용]';
            }
            if(getCookie('darkMode') === 'enabled') {
                enableDarkMode();
            }

            function updateSubOptions(mainOption) {
                const selectedOptions = Array.from(document.querySelectorAll('.sub-option-select'))
                    .filter(select => select.value)
                    .map(select => select.value);
                const allSelectedOptions = [mainOption, ...selectedOptions];
        

                document.querySelectorAll('.sub-option-select').forEach(select => {
                    const currentSelection = select.value;
                    select.innerHTML = '<option value="">부옵션을 선택해주세요.</option>';

                    subOptions.filter(opt => !mainOption.includes(opt)).forEach(option => {

                        const opt = document.createElement('option');
                        opt.value = option;
                        opt.textContent = option;
                        if (option === currentSelection) {
                            opt.selected = true;
                        }
                        if(option === currentSelection || !allSelectedOptions.includes(option))
                            select.appendChild(opt);
                    });
                });
            }

            

        });

        
        function urlshare() {
            let url = new URL(window.location.href);
            let args = "?select_artifacts="+document.getElementById('artifact-select').value+"&select_parts="+partOfArtifacts[document.querySelector('input[name="artifact-part"]:checked').value]+"&select_main="+document.getElementById('main-option-select').value+"&select_sub1="+document.getElementById('sub-option-select-1').value+"&select_sub2="+document.getElementById('sub-option-select-2').value+"&select_sub3="+document.getElementById('sub-option-select-3').value+"&select_sub4="+document.getElementById('sub-option-select-4').value;


            navigator.clipboard.writeText(url.origin+url.pathname+args).then(function() {
                alert('링크가 복사되었습니다: ');
            }).catch(function(err) {
                console.error('링크 복사 중 오류가 발생했습니다');
            });
        }


        // 쿠키 설정 함수
        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        // 쿠키 가져오기 함수
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }
    </script>
</body>
</html>
