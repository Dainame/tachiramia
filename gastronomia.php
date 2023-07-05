
<?php get_header(); ?>

<style>
/* Estilos CSS para el contenedor de la imagen */
.image-gastronomia-container {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding: 40px;
    margin-top: 50px;
    margin-left: 5%; 
}

.image-gastronomia-container img {
    width: 300px;
    height: auto;
}

/* Estilos CSS para el contenedor del texto */
.text-gastronomia-container {
    text-align: left;
    margin-top: 20px;
    margin-left: 20px; 
    margin-left: 5%; 
}

.text-gastronomia-container p {
    margin: 10px;
    font-family: Arial, sans-serif;
    font-size: 20px;
    color: #333333;
}


.container {
    float: right;
    width: 180px;
    height: 320px;
    display: inline-block;
    background-color:#171a35;
    border-radius: 20px;
    margin: 1px; 
    margin-left: 20px; 
    margin-right: 30px; 
    position: relative; 
    top: -300px; 
}

.container::before {
    content: "⚪"; 
    position: absolute;
    top: -20px; 
    left: 50%;
    transform: translateX(-50%);
    font-size: 40px; 
    color: white; 
}

</style>


<div class="image-gastronomia-container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" width="10" height="10"> 
</div>

<div class="text-gastronomia-container">
    <p>Lorem ipsum dolor sit amet, consectetuer <br> adipiscing elit, sed diam no.
        Lorem ipsum dolor sit amet,<br>  consectetuer adipiscing elit,sed diam no.<br> Lorem ipsum dolor sit amet, consectetuer adipiscing
    </p>
</div>
            
            <div>
                <div class="container"></div>
                <div class="container"></div>
                <div class="container"></div>
            </div>

<?php get_footer(); ?>
