$(function() {
    bannerAleatorio()    
})

// toggle do menu
function menu() {
    $(".header__nav").toggleClass("show");
}

// exibir um banner diferente aleatoriamente a cada abertura ou atualização do site
function bannerAleatorio() {
    var banners = [
        '<img src="img/banner-01.png" alt="Banner de divulgação com a imagem de um carro da marca Audi e a frase: Faça a consignação do seu seminovo premium nacional ou importado.">',
        '<img src="img/banner-02.png" alt="Banner de divulgação com a imagem de dois carros da marca BMW e a frase: Seu seminovo premium nacional ou importado é na meu carro novinho, qualidade garantida e a melhor negociação.">',
        '<img src="img/banner-03.png" alt="Banner de divulgação com a imagem de um carro da marca Volkswagen e a frase: Faça sua avaliação. Compramos o seu seminovo premium nacional ou importado.">'
    ];
    var bannerRandomico = Math.floor(Math.random() * banners.length);
    $("#banner").html(banners[bannerRandomico]);
};