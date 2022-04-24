<!DOCTYPE html>

<html> 
<head>

    <title>Catedral Automação - Sistema de Automação Comercial</title>
    
    <meta charset="utf-8">
    <meta name="description" content="Com mais de 8 anos no Mercado, o Sistema Catedral se Consolidou com mais de 950 clientes de Vários Segmentos Utilizando. Fale Agora com um Especialista!">
    <meta name="author" content="Silvanio Bessa - Catedral Automação">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="robots" content="index,follow">
    
    <link rel="stylesheet" type="text/css" href="arquivos/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="arquivos/css/catedral.css">
    <link rel="stylesheet" type="text/css" href="arquivos/css/navbar.css">
	<link rel="stylesheet" type="text/css" href="arquivos/css/style.css">
    
    <link rel="stylesheet" href="arquivos/css/font-awesome.min.css">
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Roboto:400,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' type='text/css'>
    
    <link rel="stylesheet" type="text/css" href="arquivos/css/catedralMobile.css" media="(max-width: 450px)">
    <link rel="stylesheet" type="text/css" href="arquivos/css/styleMobile.css" media="(max-width: 450px)">

    <script type="text/javascript" src="arquivos/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="arquivos/js/jquery.maskedinput.min.js"></script> 
    
    <script language="JavaScript" >

		function valida(){

			d = document.formLogin;
			
			if (d.nome.value == ""){
				alert("Informe um nome de usuario para logar");
				d.nome.focus();
				return false;
			}
			
			if (d.nome.value.length < 2){
				alert ("O campo nome deve conter um nome valido!");
				d.nome.focus();
				return false;
			}
			
			if (d.senha.value == ""){
				alert("Informe uma senha para logar");
				d.senha.focus();
				return false;
			}
			
			if (d.senha.value.length < 5){
				alert ("O campo senha deve conter uma senha valida!");
				d.senha.focus();
				return false;
			}
		
			document.forms["formLogin"].submit();
		}
		
	</script>
    
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '217024895368694', {
    em: 'insert_email_variable,'
    });
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=217024895368694&ev=PageView&noscript=1"/></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->

</head>

<body marginwidth="0" marginheight="0" leftmargin="0" rightmargin="0">

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
        
    <!-- BARRA FIXA -->
    <div class="row barraFixa">
        <div class="col-lg-4 col-sm-4 barraTxt1">
        	<strong>Deseja adquirir o Sistema?</strong> Fale Agora com um Consultor: 
        </div>
        <div class="col-lg-4 col-sm-4 barraTxt2">
			<img src="arquivos/img/iconMiniFone.png" class="mg3" />(61) 3202-6464
            <span class="mg1"> <img src="arquivos/img/iconMiniCelular.png" class="mg3" />(61) 9 9805-4064</span>
        </div>
        <div class="col-lg-4 col-sm-4 barraTxt3">
        	<style type="text/css">
ul{
	width: 370px;
	margin: 0 auto;
	list-style: none;     
	font-family: 'Montserrat', sans-serif;
	font-size: 14px;
	/*font-weight: 300;
	font-weight:bold; */
	margin-top:-5px;
}
ul li{
	float: left;
	position: relative; /* Necessário para o item filho se posicionar a LI que é o pai */
}
ul li a{
	display: block;
	padding: 2px 5px 2px 5px;
	text-decoration: none;
	color: #777;
}
ul li:hover > a{
	color: #fcc715;
}
ul li ul{
	display: none;
	position: absolute;
}
ul li:hover ul{ /* Quando passar o mouse sobre a LI aparecerá o menu filho */
	width: 110px; /* Tamanho do menu filho */
	height:32px;
	display: block; 
}
ul li ul li{
	width: 160px;
	cursor: pointer;
	height:35px;
	left:-39px;
	margin-top:-3px;
}

ul li ul li ul li{
	display: none;
	background-color:#f9d96e;
	border-bottom:#777 1px solid;
}
ul li ul li ul{
	top: 0; /* Para deixar o sub-menu na mesma linha do menu pai */
	left:70px;
	height:35px;
}
ul li ul li:hover ul li{
	display: block;
	width: 180px;
	left: 100%; /* Para deixar o sub-menu ao lado do menu pai */
	height:35px;
}

.tamanho2{
	width:153px;
	height:340px;
	background:#f1cb27;
	font-size:12px;
	margin-left:5px;
	padding-left:5px;
}

.div1{
	width:97%; 
	height:auto; 
	background:#d6a000; 
	color:#FFF; 
	font-weight:bold; 
	text-align:center; 
	margin-top:6px; 
	padding-top:2px; 
	padding-bottom:1px;
}

.div2{
	width:97%; 
	height:auto; 
	background:#fbefbe; 
	margin-top:0px; 
	padding-top:2px; 
	padding-bottom:4px; 
	border-bottom:#f1cb27 6px solid;
}

.tamanho3{
	width:100%;
	font-size:14px;
}

.pt2{
	text-align:left;
	padding-left:9px;
	font-weight:bold;
}

.dot{
	margin-right:3px;
}

.btAcessoRemoto{
	position:relative;
	left:-2px;
	top:5px;
}

.menu4{
	position:relative;
	top:-1px;
}

.menu6{
	position:relative;
	top:-6px;
}

.menu7{
	position:relative;
	top:-10px;
}

.menu8{
	position:relative;
	top:4px;
}

.menu9{
	position:relative;
	top:3px;
}

</style>

<div class="posicaoMenu">

<ul>
    <li>
        <a href="#"><img src="arquivos/img/menu1.png" /></a>
        <ul>
            <li><a href="suporte.php"><img src="arquivos/img/menu8.png" class="menu8" /></a></li>
            <li><a href="painel.php"><img src="arquivos/img/menu9.png" class="menu9" /></a></li>
            <li><a href="https://www63.bb.com.br/portalbb/boleto/boletos/hc21e,802,3322,10343.bbx" target="_blank"><img src="arquivos/img/menu4.png" class="menu4" /></a></li>
            <li><a href="download.php"><img src="arquivos/img/menu6.png" class="menu6" /></a></li>
            <li><a href="https://api.swi-rc.com/integration/integration.php?uid=ozxewGqfHFcO3Dwbr%2BrGLY01dW%2BSdk0uy%2F3URqdEa0lTw8QAWA4jHmBqRpVNt3I4A5g2CuHdWaIGhMgNsjQ%2BcQkZ4v7VC8qTIA%3D%3D"><img src="arquivos/img/menu7.png" class="menu7" /></a></li>
        </ul>
    </li>
    <li>
        <a href="#"><img src="arquivos/img/menu2.png" /></a>
        <ul>
            <li class="tamanho2">
            	
                <div class="div1">
            		<p class="tamanho3">
                    	Seg a Sex
                        <br />09:00h &agrave;s 18:00h
                    </p>
                </div>
                <div class="div2">
                	<p class="tamanho3 pt2" align="left">
                    	<img src="arquivos/img/iconMiniFone.png" width="12" height="12" class="dot" />(61) 3202-6464
                    </p>
                	<p class="tamanho3 pt2" align="left">
                    	<img src="arquivos/img/iconMiniCelular.png" width="8" height="12" class="dot" />(61) 9 9854-2193
                    </p>
                </div>
                
                <div class="div1">
            		<p class="tamanho3">
                    	Ap&oacute;s as 18:00h, 
                        <br />Finais de Semana 
                        <br />e Feriados
                    </p>
                </div>
                <div class="div2">
                	<p class="tamanho3 pt2" align="left">
                    	<img src="arquivos/img/iconMiniCelular.png" width="8" height="12" class="dot" />(61) 9 9872-4113
                    </p>
                	<p class="tamanho3 pt2" align="left">
                    	<img src="arquivos/img/iconMiniCelular.png" width="8" height="12" class="dot" />(61) 9 9872-4116
                    </p>
                </div>
                
		<!--p class="tamanho3"><a href="acessoRemoto.php"><img src="arquivos/img/btAR.png" class="btAcessoRemoto" /></a></p-->

		<p class="tamanho3"><a href="https://startcontrol.com/pin.php" target="_blank"><img src="arquivos/img/btAR.png" class="btAcessoRemoto" /></a></p>
                
            </li>
        </ul>
    </li>
</ul>

</div>
        </div>
    </div>
    
    <!-- MENU -->    
    <div class="barraMenu bordaBarraMenu">
    	<div style="width: 100%; height: auto;">
    <div style="float:left; margin-right:25px;">
        <a href="index.php"><img src="arquivos/img/logo.png" class="imgLogo" /></a>
    </div>

    <div class="navbar-default navbar-static-top menuDrop" role="navigation">
        
            <div class="navbar-header text-left">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
                    <span class="sr-only">Toggle navigation</span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                </button>
            </div>
            
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav menuMain">
                    <li><a href="empresa.php">Empresa</a></li>
                    <li><a href="legislacao.php">Portal de Notícias</a></li>
                    <li><a href="certificado.php">Certificado Digital</a></li>
                    <li><a href="videos.php">Vídeos</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Segmentos<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="pages/bar/">Bares e Restaurantes</a></li>
                            <li><a href="pages/pizza/">Pizzarias e Deliverys</a></li>
                            <li><a href="pages/roupas/">Lojas de Roupas e Calçados</a></li>
                            <li><a href="pages/pet/">Pet Shops e Agropecuárias</a></li>
                            <li><a href="pages/salao/">Salões de Beleza</a></li>
                            <li><a href="pages/servicos/">Oficinas e Serviços de Manutenção</a></li>
                            <li><a href="pages/acougue/">Açougues</a></li>
                            <li><a href="pages/geral/">Estabelecimentos em Geral</a></li> 
                        </ul>
                    </li>
                </ul>
            </div>

    </div>

    <div style="clear: left;"></div>
</div>    </div>
    <!-- FIM MENU -->
    
    <!-- ----- PAINEL ----- -->
    <div class="row empresa">
        <div class="col-md-6 margin-top col-sm-6 text-center">
            <p class="tituloEmpresa">&nbsp;</p>
            <div class="fonesContato mg6">
                <p>Caso deseje falar com o Suporte não hesite em nos ligar:</p>
                <div class="fonesContato2">
                    <p>seg a sexta - 09:00 às 18:00h</p>
                    <p class="pContato">
                        <br /><img src="arquivos/img/iconMiniFone.png" class="dotbr3" />(61) 3202-6464
                		<br /><img src="arquivos/img/iconMiniCelular.png" class="dotbr5" />(61) 9 9854-2193
                    </p>
                </div>
                <div class="fonesContato3">
                    <p>após as 18:00h, finais de semana e feriados</p>
                    <p class="pContato2">
                        <br /><img src="arquivos/img/iconMiniCelular.png" class="dotbr3" />(61) 9 9872-4113
                		<br /><img src="arquivos/img/iconMiniCelular.png" class="dotbr4" />(61) 9 9872-4116
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6 margin-top col-sm-6 text-center">
            <p class="titulo">Acesse o seu Painel de Cliente</p>
            <form action="arquivos/login/z.php" method="post" name="formLogin">
				<fieldset>
                    <div class="form-group">
                    	<div class="input-group">
                    		<span class="input-group-addon"><img src="arquivos/img/miniPessoa.png" /></span>
                    		<input type="text" class="form-control" id="login" name="login" placeholder="Login">
                  		</div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><img src="arquivos/img/miniCadeado.png" /></span>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                        </div>
                    </div>

                  	<div class="form-group">
						<button type="submit" class="btn btn-primary btFalarEspecialista">
                    		Entrar
                		</button>
					</div>
				</fieldset>
			</form>
		</div>
    </div>
    
	<!-- ----- RODAPE ----- -->
    <div class="row endereco">
        <div class="col-lg-4">
            <h3><a href="empresa.php">A Empresa</a></h3>
            <h3><a href="legislacao.php">Portal de Notícias</a></h3>
            <h3><a href="certificado.php">Certificado Digital</a></h3>
            <h3><a href="videos.php">Vídeos</a></h3>
			<h3><a href="contato.php">Contato</a></h3>
            <p class="p3">
                <div class="fb-page mapa" data-href="https://www.facebook.com/catedralautomacao/?ref=br_rs" data-tabs="timeline" data-width="340" data-height="290" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/catedralautomacao/?ref=br_rs" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/catedralautomacao/?ref=br_rs">Catedral Automação</a></blockquote></div>
            </p>
        </div>
        <div class="col-lg-4">
            <h2>Telefones</h2>
            <p>seg a sexta - 09:00 às 18:00h</p>
            <p><strong>(61) 3202-6464</strong></p>
            <p><strong>(61) 9 9854-2193</strong></p>
            <p>após as 18:00h, finais de semana e feriados</p>
            <p><strong>(61) 9 9872-4113</strong></p>
            <p><strong>(61) 9 9872-4116</strong></p>
            <p>&nbsp;</p>
            <h2>Email</h2>
            <p><a href="mailto:contato@catedralempresas.com.br">contato@catedralempresas.com.br</a></p>
        </div>
        <div class="col-lg-4">
            <h2>Localização</h2>
            <p>QNE 4, Lote 2, Lojas 3 e 4, Taguatinga Norte - DF</p>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d479.84196617351716!2d-48.064894928245636!3d-15.817882695259792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd8adb756fc0e4064!2zQ2F0ZWRyYWwgQXV0b21hw6fDo28!5e0!3m2!1spt-BR!2sbr!4v1484587807986" width="100%" height="358" frameborder="0" allowfullscreen class="mapa"></iframe>
            </div>
        </div>
    </div>
    
    <!-- ----- RODAPE ----- -->
    <div class="row rodape">
        <div class="col-lg-12 col-sm-12 text-center">
            <p>© Copyright 2022. Catedral Automação - Todos os Direitos Reservados.</p>
        </div>
    </div>
    
    <script type="text/javascript" src="arquivos/js/jquery-1.10.2.min.js"></script> 
	<script type="text/javascript" src="arquivos/js/bootstrap.min.js"></script>

	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-89755001-1', 'auto');
      ga('send', 'pageview');
    
    </script>

    <script type="text/javascript">
    // <![CDATA[
        jQuery(function($) {
            $.mask.definitions['~']='[+-]';
            //Inicio Mascara Telefone
            $('input[type=tel]').focusout(function(){
                var phone, element;
                element = $(this);
                element.unmask();
                phone = element.val().replace(/\D/g, '');
                if(phone.length > 10) {
                    element.mask("(99) 99999-999?9");
                } else {
                    element.mask("(99) 9999-9999?9");
                }
            }).trigger('focusout');
            //Fim Mascara Telefone
        });
    // ]]>
    </script>    

	<!-- C�digo do Google para tag de remarketing -->
    <!--------------------------------------------------
    As tags de remarketing n�o podem ser associadas a informa��es pessoais de identifica��o nem inseridas em p�ginas relacionadas a categorias de confidencialidade. 	Veja mais informa��es e instru��es sobre como configurar a tag em: http://google.com/ads/remarketingsetup
    --------------------------------------------------->
    <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 858618818;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/858618818/?guid=ON&amp;script=0"/>
    </div>
    </noscript>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/58adc973f17110258696a8e9/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    
</body>
</html>