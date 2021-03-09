
/***
 * Ödev Eklenen görev boş olursa eklemesin 
 * indeks değeri 0 dan değil 1 den başlasın 
 * 
 */



// Görev için bir dizi oluştur 
var gorevler = [];
var temp = '';

/**
 * new Array('1','2');
 */


// formu seç ve submit olayıını dinle
document.getElementById('gorevForm').addEventListener('submit', function(event){
    // formu default yap 
    event.preventDefault();
    // Görev Değerini al 
    let gorevAdi = document.getElementById('gorevAdi').value;

    // alına görevleri bir dizide topla
    gorevler.push(gorevAdi);

    // input alanını temizle 
    document.getElementById('gorevAdi').value = '';

    // tablodaki tbodyi queySelector ile seç
    let gorevListeEkle =  document.querySelector('#gorevList > tbody');

    // temp adında değerde tut
   

    // döngüde değeri tempte sakla
    temp = '';
    gorevler.forEach((gorev, index) => {
        temp += `
        <tr>
        <th scope="row">${index}</th>
        <td>${gorev}</td>
        <td>
        <button  onclick="gorevTamamla(${index})" type="button" class="btn btn-success">Tamamlandı</button>
        </td>
        </tr>
        ` 
    });

    // değerleri ekle 
    gorevListeEkle.innerHTML = temp;
    // Görevleri konsoldan göster

} );

// Görev tamamlama adında  fonksiyon yap
function gorevTamamla(silinecekDiziNumarasi) {
    // tutulacak temp degerini ekle ve boş olsun 
    temp = '';
    //seçili öğyeyi sil
    gorevler.splice(silinecekDiziNumarasi,1);

    // Tekrdan döngüde göster 
    gorevler.forEach((gorev, index) => {
        temp += `
        <tr>
        <th scope="row">${index}</th>
        <td>${gorev}</td>
        <td ">
        <button onclick="gorevTamamla(${index})" type="button" class="btn btn-success">Tamamlandı</button>
        </td>
        </tr>
        ` 
    });

    // listeleri tbody içerisindeki trlere ekle
    document.querySelector('#gorevList > tbody').innerHTML= temp;
}

