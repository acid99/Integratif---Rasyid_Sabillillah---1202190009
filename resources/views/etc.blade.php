<?php
$konten = file_get_contents("getPost.json");
$data = json_decode($konten, true);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Newserific
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PI_Rasyid</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/layout/styles/layout.css') }}">
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="index.html">Newscid.</a></h1>
      <p>Menyuguhkan berita terkini untuk anda</p>
    </div>
    <div class="fl_right"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="berita">Berita</a></li>
        <li><a href="market">Market</a></li>
        <li><a href="tech">Tech</a></li>
        <li class="active"><a href="">Etc</a></li>
      </ul>
    </div>
    <div id="search">
        <form class="row g-2 mt-5 " id="pokemon-form" >
        <fieldset>
          <legend>Site Search</legend>
          <div class="col-auto">
          <input type="text" class="form-control" name="pokemon" placeholder="Cari Pokemon">
          <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3">Search</button>
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
        <div id="container">
            <div id="content">
            <div id="featured_post">
                <h1><p align="center"><a href="<?php echo $data[0]["url"]; ?>"><?php echo $data[0]["title"]; ?></a></p></h1>
                <img src="<?php echo $data[0]["img"]; ?>" alt="">
                <strong><p align="justify"><?php echo $data[0]["description"]; ?> <a href="<?php echo $data[0]["url"]; ?>">Continue Reading &raquo;</a></p></strong>
            </div>
            <div id="hpage_latest">
            <div id="featured_post">
                <h1><p align="center"><a href="<?php echo $data[50]["url"]; ?>"><?php echo $data[50]["title"]; ?></a></p></h1>
                <img src="<?php echo $data[50]["img"]; ?>" alt="">
                <strong><p align="justify"><?php echo substr($data[50]["description"], 0, 250); ?> <a href="<?php echo $data[50]["url"]; ?>">Continue Reading &raquo;</a></p></strong>
            </div>
            <div id="featured_post">
                <h1><p align="center"><a href="<?php echo $data[27]["url"]; ?>"><?php echo $data[27]["title"]; ?></a></p></h1>
                <img src="<?php echo $data[27]["img"]; ?>" alt="">
                <strong><p align="justify"><?php echo substr($data[27]["description"], 0, 250)?> <a href="<?php echo $data[27]["url"]; ?>">Continue Reading &raquo;</a></p></strong>
            </div>
            <div id="featured_post">
                <h1><p align="center"><a href="<?php echo $data[58]["url"]; ?>"><?php echo $data[58]["title"]; ?></a></p></h1>
                <img src="<?php echo $data[58]["img"]; ?>" alt="">
                <strong><p align="justify"><?php echo substr($data[58]["description"], 0, 256)?><a href="<?php echo $data[58]["url"]; ?>">Continue Reading &raquo;</a></p></strong>
            </div>
            </div>
            </div>

    <div id="column">
    <div class="mb-5" id="pokemon-content"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js" integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const form = document.querySelector("#pokemon-form");
        const pokemonContent= document.querySelector("#pokemon-content")
        const BASE_URI = `https://pokeapi.co/api/v2/pokemon/`;
        form.addEventListener('submit', SearchPokemon);
        function SearchPokemon (e) {
            if(pokemonContent.hasChildNodes()){
                pokemonContent.removeChild(pokemonContent.firstChild)
            }
            e.preventDefault()
            let pokemonName = form.pokemon.value.toLowerCase();
            axios.get(`${BASE_URI}${pokemonName}`)
            .then(function (response) {
                let data = response.data
                const contentHTML = 
                `<div class="p-4">
                  <div>
                      <center><img  style="width: 200px" src="${data.sprites.front_default}">
                      <center><img  style="width: 200px" src="${data.sprites.back_default}">
                  </div>
                  <h3 style="text-align: center; margin-bottom: 20px">Pokemon ${data.name}</h3>
                  <div>
                      <ul style="font-size: 18px">
                          <li>${data.abilities[0].ability.name}</li>
                          <li>${data.abilities[1].ability.name}</li>
                      </ul>
                  </div>
                </div>`
            console.log(data.abilities[1].ability.name);
                pokemonContent.innerHTML += contentHTML;
            })
            .catch(function (error) {
                // handle error
                alert("Pokemon Not found")
            });
        }
        
    </script>
      <ul id="latestnews">
        <li><img src="<?php echo $data[1]["img"]; ?>" alt="" width ="290" height="200">
          <p><strong><a href="<?php echo $data[1]["url"]; ?>"><?php echo $data[1]["title"]; ?></a></strong><?php echo substr($data[1]["description"], 0, 258); ?></p>
        </li>
        <li><img src="<?php echo $data[55]["img"]; ?>" alt="" width ="290" height="200">
          <p><strong><a href="<?php echo $data[55]["url"]; ?>"><?php echo $data[55]["title"]; ?></a></strong><?php echo substr($data[55]["description"], 0, 263); ?></p>
        </li>
        <li><img src="<?php echo $data[25]["img"]; ?>" alt="" width ="290" height="200">
          <p><strong><a href="<?php echo $data[25]["url"]; ?>"><?php echo $data[25]["title"]; ?></a></strong><?php echo substr($data[25]["description"], 0, 266); ?></p>
        </li>
        <li><img src="<?php echo $data[31]["img"]; ?>" alt="" width ="290" height="200">
          <p><strong><a href="<?php echo $data[31]["url"]; ?>"><?php echo $data[31]["title"]; ?></a></strong><?php echo substr($data[31]["description"], 0, 188); ?></p>
        </li>
        <li><img src="<?php echo $data[19]["img"]; ?>" alt="" width ="290" height="200">
          <p><strong><a href="<?php echo $data[19]["url"]; ?>"><?php echo $data[19]["title"]; ?></a></strong><?php echo substr($data[19]["description"], 0, 266); ?></p>
        </li>
      </ul>
    </div>
    <br class="clear" />
  </div>
  <br class="clear" />
</div>
<div class="wrapper col7">
  <div id="copyright">
    <p class="center">Copyright &copy; 2022 by <a href="#">Rasyid | IT-0202 | 1202190009</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>