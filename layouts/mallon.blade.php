<!DOCTYPE html>
<html lang="en">
    <head>
        {{ Theme::partial('seostuff') }} 
        {{ Theme::asset()->styles() }} 
        {{ Theme::partial('defaultcss') }}  
    </head>
    <body> 
        <div class="page">
            {{ Theme::partial('header') }} 
            {{ Theme::partial('slider') }}  
            <section id="main-content">
                <div class="container">
                    {{ Theme::place('content') }}  
                </div>
            </section>
            {{ Theme::partial('footer') }} 
        </div>
        {{ Theme::partial('defaultjs') }}   
        {{ Theme::partial('analytic') }}    
    </body>
</html>