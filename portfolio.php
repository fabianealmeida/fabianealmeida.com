<!--Defina o título da variável da Página que será puxado em toda a página.-->
<?php $pagAtual = 'por' ?>

<?php include("includes/_head.php");?>

<body onload="ClearFormContato()">
  <div id="pointer"></div>

  <!--CARREGADOR-->
  <?php include("includes/_loader.php");?>

  <!--MENU-->
  <?php include("includes/_head_nav.php");?>

  <!--SLIDER-->
  <?php include("includes/_banner_parallax.php");?>

  <!--MENU SECUNDÁRIO-->
  <?php include("includes/_portfolio_nav.php") ;?>

  <!--CONTEÚDO-->
  <section  class="degAmareloFlamingo" id="portfolio">

      <!--CONTEÚDO PORTFOLIO-->
      <div id="portfolio">
        <div class="container">

          <ul id="itensPortfolio" class="list-inline sr5">

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow <?php coletaPort('sit','class'); ?>" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_7.1_pq.jpg" alt="Web Site JMalucelli Seguros" class="portImg img-responsive" data-cliente="JMalucelli Seguros e Bruc Internet" 
              data-descricao="Layout e Programação Front-End para o Site institucional da agência de seguros JMalucelli, desenvolvido para a agência Bruc Internet." 
              data-area="<?php coletaPort('sit','nome'); ?>">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_35.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Kin Eletrodomésticos" 
              data-descricao="Layout e desenvolvimento do site Kim Eletrodomésticos - Versão 2.0." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_33.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Faculdade Faesp" 
              data-descricao="Criação e desenvolvimento do site da Faculdade Faesp." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all identidade hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_63.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Pickler Team" 
              data-descricao="Cartão de Visitas para a empresa Pickler team." 
              data-area="Identidade e Papelaria">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_38.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Kraft Foods" 
              data-descricao="Layout do site Promocional da ação interna MAP." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_10.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Alfa Cobranças e Bruc Internet" 
              data-descricao="Site institucional e programação front-end responsiva para a Alfa Serviços de Cobrança, desenvolvido para a agência Bruc Internet." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_26.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Bionostic Análises Laboratoriais" 
              data-descricao="Proposta de layout do website, desenvolvido para a agência Opus2 web studio." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all design hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_3.1_pq.jpg" alt="Caderno 2012 Aker Solutions" class="portImg img-responsive" data-cliente="Aker Solutions"  
              data-descricao="Caderno do funcionário 2012, desenvolvido para a Aker Solutions." 
              data-area="Material para Divulgação">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all design hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_1.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Aker Solutions" 
              data-descricao="Caderno Trainee desenvolvido para os novos funcionários da Aker Solutions." 
              data-area="Material para Divulgação">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all design hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_62.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Rodrigo Alarcón" 
              data-descricao="Folder de divulgação da Joalheria Rodrigo Alarcón." 
              data-area="Material para Divulgação">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_49.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Ribas Imóveis e Bruc Internet" 
              data-descricao="Layout e desenvolvimento front-end do site da Imobiliária Ribas, desenvolvido para a agência Bruc Internet." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all identidade hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_15.1_pq.jpg" alt="Calendário Aker Solutions" class="portImg img-responsive" 
              data-cliente="Aker Solutions" 
              data-descricao="Calendário Aker Solutions" 
              data-area="Identidade e Papelaria">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_55.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Grupo JMalucelli" 
              data-descricao="Layout e desenvolvimento front-end do website Grupo JMalucelli, para a agência Bruc Internet." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_2.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Bruc Internet" 
              data-descricao="Site institucional para a agência e programação front-end responsiva." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all identidade hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_4.1_pq.jpg" alt="Identidade Corporativa Hypper TI" class="portImg img-responsive" data-cliente="Hypper TI"  
              data-descricao="Papelaria completa (Papel timbrado, envelope, pasta, cartão, Cd) para a agência Hypper TI." 
              data-area="Identidade e Papelaria">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_32.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Eletrofrio" 
              data-descricao="Criação do layout e desenvolvimento do site Eletrofrio." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_50.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Shopping Palladium e Bruc Internet" 
              data-descricao="Proposta de Layout para o Shopping Palladium, desenvolvido para a agência Bruc Internet." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_44.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Tecter" 
              data-descricao="Layout e desenvolvimento do site da empresa Tecter" 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all identidade hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_5.1_pq.jpg" alt="Embalagens AntiMonotonia" class="portImg img-responsive" 
              data-cliente="AntiMonotonia Store" 
              data-title="Embalagens para os produtos AntiMonotonia" 
              data-descricao="Embalagens em papelão e papel kraft para posters e cartões da marca AntiMonotonia." 
              data-area="Identidade e Papelaria">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all identidade hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_6.1_pq.jpg" alt="Embalagens AntiMonotonia" class="portImg img-responsive" 
              data-cliente="Odonto Boros" 
              data-title="Identidade Corporativa Odonto Boros" 
              data-descricao="Logo, envelopes, receituário, cartão e CD." 
              data-area="Identidade e Papelaria">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">

              <img src="img/portfolio/port_8.1_pq.jpg" alt="E-commerce ZNC Suplementos" class="portImg img-responsive" 
              data-cliente="ZNC Suplementos e Bruc Internet"  
              data-descricao="E-commerce em Prestashop para a Loja ZNC Suplementos, desenvolvido para a agência Bruc Internet." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_9.1_pq.jpg" alt="Farmácia Apparenza" class="portImg img-responsive" 
              data-cliente="Farmácia Apparenza e Bruc Internet"  
              data-descricao="Web Site e programação Front-End para a Farmácia de Manipulação Apparenza, desenvolvido para a agência Bruc Internet." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_11.1_pq.jpg" alt="Site Institucional para a Loja de Sapatos Andaraki" class="portImg img-responsive" 
              data-cliente="Lojas Andaraki e Bruc Internet" 
              data-descricao="Layout e desenvolvimento front-end do site das Loja Andaraki, desenvolvido para a agência Bruc Internet." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all identidade hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_68.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Fabiane Almeida Design" 
              data-descricao="Cartão de Visitas para a Fabiane Almeida web design e design gráfico." 
              data-area="Identidade e Papelaria">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_12.1_pq.jpg" alt="Landing Page demonstrativa para os Armários Nilko." class="portImg img-responsive" 
              data-cliente="Nilko Armários e Bruc Internet" 
              data-descricao="Landing Page demonstrativa para os Armários Nilko, desenvolvido para a agência Bruc Internet." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_13.1_pq.jpg" alt="Site Institucional para a Empresa Ipeq Consultoria Imobiliária" class="portImg img-responsive" data-cliente="Ipeq e Bruc Internet" data-descricao="Site Institucional para a Empresa Ipeq Consultoria Imobiliária, desenvolvido para a agência Bruc Internet." data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_22.1_pq.jpg" alt="Web Site Institucional para o Laboratório Veterinário Bionostic" class="portImg img-responsive" 
              data-cliente="Laboratório Bionostic" 
              data-descricao="Web Site Institucional para o Laboratório Veterinário Bionostic, desenvolvido para a agência Opus2 Web Studio." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_23.1_pq.jpg" alt="Web Site para o Programa de Reflorestamento Morro do Anhangava" class="portImg img-responsive" 
              data-cliente="Aker Solutions" 
              data-descricao="Web Site para o Programa de Reflorestamento Morro do Anhangava" 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all identidade hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_25.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Aker Solutions" 
              data-descricao="Criação e ilustração do mascote da Aker Solutions. Modelos apresentados." 
              data-area="Identidade e Papelaria">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_27.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Compre Clique" 
              data-descricao="Criação do layout do web site Compre clique." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_28.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Mercearia Coralina" 
              data-descricao="Criação do layout do website da Mercearia Coralina." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_29.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Curitiba - Capital do Natal" 
              data-descricao="Criação do layout para o site da campanha Curitiba Capital do Natal." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_30.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Curta Cultura" 
              data-descricao="Layout para o site do Programa Curta Cultura." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_43.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Sinotruk" 
              data-descricao="Proposta de Layout para o site da empresa Sinotruk." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_31.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="D2 Projetores e Lâmpadas" 
              data-descricao="Criação do layout e desenvolvimento do site D2 Projetores e lâmpadas." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_34.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Hypper TI" 
              data-descricao="Criação e desenvovimento do site Hypper Tecnologia de Informática." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_36.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Kin Eletrodomésticos" 
              data-descricao="Layout e desenvolvimento do site Kim Eletrodomésticos - Versão 1.0." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_37.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Macbiz Informática" 
              data-descricao="Layout e desenvolvimento do site Macbiz Informática." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_48.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Giben do Brasil" 
              data-descricao="Layout do site da empresa Guiben deo Brasil." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_39.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Meu Condomínio Web" 
              data-descricao="Desenvolvimento do layout do guia de anúncios, Meu Condomínio Web." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_40.1_pq.jpg" alt="Layout do site Moça Prendada" class="portImg img-responsive" 
              data-cliente="Moça Prendada" 
              data-descricao="Desenvolvimento do site Moça Prendada." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_41.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="ONG Reação Empresarial" 
              data-descricao="Layout e desenvolvimento do site da ONG Reação Empresarial." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_42.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Reviver Sul" 
              data-descricao="Layout e desenvolvimento do site Reviver Sul." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_45.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Vip Sensation" 
              data-descricao="Layout e desenvolvimento do site Vip Sensation." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_46.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Metso" 
              data-descricao="Layout e desenvolvimento da ação interna Quiz Metso." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_47.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Futura Produções" 
              data-descricao="Layout para o website da Futura Produções." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_51.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Booster Tech" 
              data-descricao="Layout e desenvolvimento do website Booster Tech." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_52.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Cores de Dali" 
              data-descricao="Desenvolvimento do site Cores de Dali." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_53.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="FEPASC" 
              data-descricao="Layout e desenvolvimento front-end do site FEPASC, para a agência Bruc Internet." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_54.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Nilko Armários" 
              data-descricao="Proposta de layout para o website da Nilko Armários, desenvolvido para a agência Bruc Internet." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_56.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Imobiliária Confronto" 
              data-descricao="Layout e desenvolvimento front-end do website Confronto Imóveis, para a agência Bruc Internet." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_57.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="IEMAV" 
              data-descricao="Desenvolvimento e layout da Igreja Evangélica Menonita Água Verde para a agência Bruc Internet." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all identidade hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_58.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Belpaís" 
              data-descricao="Papel timbrado para a empresa Belpaís." 
              data-area="Identidade e Papelaria">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all identidade hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_59.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Reação Empresarial" 
              data-descricao="Brindes, camiseta e boné da ONG Reação Empresarial." 
              data-area="Identidade e Papelaria">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all identidade hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_60.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Curta Cultura" 
              data-descricao="Propostas de logo para o programa Curta Cultura." 
              data-area="Identidade e Papelaria">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all design hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_61.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Moça Prendada" 
              data-descricao="Look book, folder e cartões de visita para a empresa Moça Prendada." 
              data-area="Material para Divulgação">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all identidade hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_64.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Opus2 web studio" 
              data-descricao="Cartão de Visitas para a empresa Opus2 web studio." 
              data-area="Identidade e Papelaria">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all identidade hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_65.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Opus2 web studio" 
              data-descricao="Cartão de Visitas para a empresa Moça Prendada." 
              data-area="Identidade e Papelaria">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all identidade hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_66.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="D2 Projetores e Lâmpadas" 
              data-descricao="Cartão de Visitas para a empresa D2 Projetores e Lâmpadas." 
              data-area="Identidade e Papelaria">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all identidade hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_67.1_pq.jpg" alt="" class="portImg img-responsive" 
              data-cliente="Odonto Boros" 
              data-descricao="Cartão de Visitas para a clínica odontológica Odonto Boros." 
              data-area="Identidade e Papelaria">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>
<!-- 
            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all ilustracao hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_16.1_pq.jpg" alt="Poster David Bowie para a Loja AntiMonotonia" class="portImg img-responsive" 
              data-cliente="AntiMonotonia Store" 
              data-descricao="Poster David Bowie para a Loja AntiMonotonia" 
              data-area="Ilustração">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>
 -->
            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_24.1_pq.jpg" alt="Web Site de Diulgação dos trabalhos do Artista Plástico Anderson Thives" class="portImg img-responsive" 
              data-cliente="Anderson Thives" 
              data-descricao="Web Site de Diulgação dos trabalhos do Artista Plástico Anderson Thives." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>
<!-- 
            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all ilustracao hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_17.1_pq.jpg" alt="Poster Robert Smith para a Loja AntiMonotonia" class="portImg img-responsive" 
              data-cliente="AntiMonotonia Store" 
              data-descricao="Poster Robert Smith para a Loja AntiMonotonia." 
              data-area="Ilustração">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>  -->
<!-- 
            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all ilustracao hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_18.1_pq.jpg" alt="Poster Siouxsie para a Loja AntiMonotonia." class="portImg img-responsive" 
              data-cliente="AntiMonotonia Store" 
              data-descricao="Poster Siouxsie para a Loja AntiMonotonia." 
              data-area="Ilustração">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all ilustracao hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_19.1_pq.jpg" alt="Poster Jim Morrison para a Loja AntiMonotonia" class="portImg img-responsive" 
              data-cliente="AntiMonotonia Store" 
              data-descricao="Poster Jim Morrison para a Loja AntiMonotonia." 
              data-area="Ilustração">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>
 -->


            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all web hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_14.1_pq.jpg" alt="Web Site Informativo para o IX Congresso Brasileiro de Atividade Física e Saúde" class="portImg img-responsive" 
              data-cliente="CBAFS e Bruc Internet" 
              data-descricao="Web Site Informativo para o IX Congresso Brasileiro de Atividade Física e Saúde, desenvolvido para a agência Bruc Internet." 
              data-area="Desenvolvimento de Site">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>
<!-- 
            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all ilustracao hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_20.1_pq.jpg" alt="Poster Psicose 1 para a Loja AntiMonotonia" class="portImg img-responsive" data-cliente="AntiMonotonia Store"  data-descricao="Poster Psicose 1 para a Loja AntiMonotonia." data-area="Ilustração">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all ilustracao hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_21.1_pq.jpg" alt="Poster Psicose 2 para a Loja AntiMonotonia" class="portImg img-responsive" 
              data-cliente="AntiMonotonia Store" 
              data-descricao="Poster Psicose 2 para a Loja AntiMonotonia." 
              data-area="Ilustração">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>
 -->
            <li class="col-xs-6 col-sm-4 col-md-3 sr5 tile scale-anm all design hvr-grow" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/port_70.1_pq.jpg" alt="Poster Psicose 2 para a Loja AntiMonotonia" class="portImg img-responsive" 
              data-cliente="Pickler Team Rescue" 
              data-descricao="Folder / Portfolio de Serviços." 
              data-area="Materiais para divulgação">
              <div class="hoverPortBorder">
                <div class="hoverPort"></div>
              </div>
            </li>


          </ul>

        </div>
      </div>
      <!--/CONTEUDO PORTFOLIO-->



<!--MODAL BOOTSTRAP-->
<!-- Large modal -->
<div class="modalBox modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myModal" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close closeBtn" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

<!--           <div class="nextJob" data-toggle="tooltip" data-placement="bottom" ><i class="fa fa-chevron-right"></i></div>
          <div class="prevJob" data-toggle="tooltip" data-placement="bottom" ><i class="fa fa-chevron-left"></i></div>
 -->

        <h4 class="text-center idCliente modal-title">Cliente: <span></span></h4>
        <p class="text-center idDescricao"><span></span></p>
        <p class="tag"></p>
      </div>

      <div class="modal-body">

        <div class=" imgBox">
          <div class="next"><i class="fa fa-ban"></i></div>
          <div class="preview"><i class="fa fa-ban"></i></div>
        </div>

      </div>


    </div>
  </div>
</div>








      <!--MODAL ALTERADO-->
      <!-- Modal -->
<!-- 
      <div class="modalBox modal col-lg-8 col-lg-offset-2 fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="background-color: rgba(255,255,255,.9); border-radius: 20px; overflow: hidden; padding:20px; width: auto"> 

            <button type="button" class="close closeBtn" data-dismiss="modal" aria-label="Close" style="color:#000">
              <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-body">
              <div class="col-lg-12" style="background-color: #fcfcfc; padding:20px; border-radius: 10px;"> 
                <p class="text-center idCliente">Cliente: <br><span></span></p><br>
                <p class="text-center idDescricao">Descrição: <br><span></span></p>

              </div>

              <div class=" imgBox col-lg-12">
                <div class="next" style="margin-top: 100px"><i class="fa fa-chevron-right"></i></div>
                <div class="preview" style="margin-top: 100px"><i class="fa fa-chevron-left"></i></div>
              </div>

            </div>

          </div>
        </div>
      </div> -->













      <!--MODAL ORIGINAL-->
      <!-- Modal -->

<!--       
      <div class="modalBox modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="background-color: rgba(255,255,255,.9); border-radius: 20px; overflow: hidden; padding:20px">

            <button type="button" class="close closeBtn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-body">
              <div class="col-lg-4" style="background-color: #fcfcfc; padding:20px; border-radius: 10px;"> 
                <p class="text-center idCliente">Cliente: <br><span></span></p><br>
                <p class="text-center idDescricao">Descrição: <br><span></span></p>

              </div>

              <div class=" imgBox col-lg-8">
                <div class="next"><i class="fa fa-chevron-right"></i></div>
                <div class="preview"><i class="fa fa-chevron-left"></i></div>
              </div>

            </div>

          </div>
        </div>
      </div>
 -->

      <!--//ROLAGEM-->

      <div class="clearfix"></div>

      <?php include("includes/_orcamento_form.php");?>

    </section>

    <?php include("includes/_foot.php");?>