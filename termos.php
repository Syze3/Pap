<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['passworde']) == true))
    {
      unset($_SESSION['email']);
      unset($_SESSION['passworde']);
      header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>
<!doctype html>
<html lang="pt-pt">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/estilos.css">

  <title>Termos de Uso</title>
  <style>
    body {
      background-color: rgb(255, 255, 255);
    }
  </style>
</head>

<body>
  <div class="d-flex flex-column wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom shadow-sm mb-3  ">
      <div class="container">
        <a class="navbar-brand" href="/"><b>Amazon Portugal</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
          <span class="navbar-toggler-icon">⠀⠀⠀⠀⠀⠀⠀⠀⠀</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav flex-grow-1">
            <li class="nav-item">
              <a class="nav-link text white active" href="index.php">Principal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="contacto.php">Contacto</a>
            </li>
            </li>
          </ul>
          <div style="color: white;">
            <ul class="navbar-nav">
              <?php
                  echo "<h5>Olá Sr.(a) <u>$logado</u></h5>";
              ?>
              <div class="d-flex">
                <a href="sair.php" class="btn btn-danger me-5">Sair</a>
              <li class="nav-item">
                <span class="badge rounded-pill bg-light text-black position-absolute ms-3 mt-0"
                  title="5 produto(s) no carrinho"><small>5</small></span>
                <a href="carrinho.php" class="nav-link text-white">⠀
                  <i class="bi-cart" style="font-size:20px;line-height:24px;"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <main class="flex-fill">
      <div class="container">
        <h1>Termos de Usos</h1>
        <hr>
        <p>
          Este site é operado pela Amazon Portugal. Em todo o site, os termos "nós", "nós" e "nosso" referem-se à Amazon
          Portugal. Amazon Portugal oferece este site, incluindo todas as informações, ferramentas e serviços
          disponíveis neste site, para você, o usuário, mediante a sua aceitação de todos os termos, condições,
          políticas e avisos estabelecidos aqui.

          Ao visitar o nosso site e/ou comprar alguma coisa no nosso site, você está a utilizar nossos “Serviços” e,
          consequentemente, concorda com os seguintes termos e condições (“Termos de serviço”, “Termos”), incluindo os
          termos e condições e políticas adicionais mencionados neste documento e/ou disponíveis por hyperlink. Esses
          Termos de serviço aplicam-se a todos os usuários do site, incluindo, entre outros, os usuários que são
          visualizadores, fabricantes, clientes, lojistas e/ou colaboradores de conteúdo.
          Leia estes Termos de serviço cuidadosamente antes de acessar ou utilizar o nosso site. Ao acessar ou usar
          qualquer parte do site, você concorda com os Termos de serviço. Se não concorda com todos os termos e
          condições deste contrato, então você não pode acessar o site ou usar quaisquer serviços. Se esses Termos de
          serviço são considerados uma oferta, a aceitação é expressamente limitada a esses Termos de serviço.

          Quaisquer novos recursos ou ferramentas que forem adicionados à loja atual também devem estar sujeitos aos
          Termos de serviço. Você pode revisar a versão mais atual dos Termos de serviço quando quiser nesta página.
          Reservamo-nos o direito de atualizar, alterar ou trocar qualquer parte desses Termos de serviço ao publicar
          atualizações e/ou alterações no nosso site. É sua responsabilidade verificar periodicamente as alterações
          feitas nesta página.O seu uso contínuo ou acesso ao site após a publicação de quaisquer alterações constitui
          aceitação de tais alterações.

        </p>
        <h4>SECÇÃO 1 - TERMOS DA LOJA VIRTUAL</h4>
        <p>
          Ao concordar com estes Termos de serviço, declara que tem idade mínima de maioridade no seu
          município de residência, ou que é maior de idade no seu município de residência, e que nos deu a sua
          permissão para permitir que qualquer um dos seus dependentes menores use este site.

          Você não deve usar os nossos produtos para qualquer fim ilegal ou não autorizado. Você também não pode, ao
          usufruir deste Serviço, violar quaisquer leis em sua jurisdição (incluindo, entre outras, as leis de direitos
          autorais).

          Você não deve transmitir nenhum vírus ou qualquer código de natureza destrutiva.

          Violar qualquer um dos Termos resultará na rescisão imediata dos seus Serviços.
        </p>
        <h4>SECÇÃO 2 - CONDIÇÕES GERAIS</h4>
        <p>
          Reservamo-nos o direito de recusar o serviço a qualquer pessoa, por qualquer motivo, a qualquer momento.

          Entende que o seu conteúdo (não incluindo informações de cartão de crédito) pode ser transferido sem
          criptografia e pode: (a) ser transmitido por várias redes; e (b) sofrer alterações para se adaptar e se
          adequar às exigências técnicas de conexão de redes ou dispositivos. As informações de cartão de crédito são sempre
          criptografadas durante a transferência entre redes.

          Concorda em não reproduzir, duplicar, copiar, vender, revender ou explorar qualquer parte do Serviço, uso
          do Serviço, acesso ao Serviço, ou qualquer contato no site através do qual o Serviço seja fornecido, sem a nossa
          permissão expressa por escrito.

          Os títulos usados neste contrato são incluídos apenas por conveniência e não limitam ou afetam os Termos.
        </p>
        <h4>SECÇÃO 3 - PRECISÃO, COMPLETUDE E PERÍODO DE VALIDADE DAS INFORMAÇÕES</h4>
        <p>
          Não nos responsabilizamos se as informações disponibilizadas neste site não forem precisas, completas ou
          atuais. O material deste site é fornecido apenas para fins informativos e não deve ser usado como a única base
          para tomar decisões sem consultar fontes de informações primárias, mais precisas, mais completas ou mais
          atuais. Qualquer utilização do material deste site é por sua conta e risco.

          Este site pode conter certas informações históricas. As informações históricas podem não ser atuais e são
          fornecidas apenas para sua referência. Reservamo-nos o direito de modificar o conteúdo deste site a qualquer
          momento, mas nós não temos obrigação de atualizar nenhuma informação em nosso site. Você concorda que é de sua
          responsabilidade acompanhar as alterações no nosso site.
        </p>
        <h4>SECÇÃO 4 - ALTERAÇÕES DO SERVIÇO E DOS PREÇOS</h4>
        <p>
          Os preços dos nossos produtos estão sujeitos a alterações sem aviso prévio.

          Reservamo-nos o direito de, a qualquer momento, modificar ou descontinuar o Serviço (ou qualquer parte ou
          conteúdo do mesmo) sem aviso prévio em qualquer momento.

          Não nos responsabilizamos por você ou por qualquer terceiro por qualquer modificação, alteração de preço,
          suspensão ou descontinuação do Serviço.
        </p>
        <h4>SECÇÃO 5 - PRODUTOS OU SERVIÇOS (se aplicável)</h4>
        <p>
          Certos produtos ou serviços podem estar disponíveis exclusivamente online através do site. Tais produtos ou
          serviços podem ter quantidades limitadas e são sujeitos a apenas devolução ou troca, de acordo com nossa
          Política de devolução.

          Fizemos todo o esforço possível para exibir da forma mais precisa as cores e imagens dos nossos produtos que
          aparecem na loja. Não podemos garantir que a exibição de qualquer cor no monitor do seu computador será
          precisa.
          Reservamo-nos o direito de, mas não somos obrigados a, limitar as vendas de nossos produtos ou Serviços para
          qualquer pessoa, região geográfica ou jurisdição. Podemos exercer esse direito conforme cada caso individual.
          Reservamo-nos o direito de limitar as quantidades de quaisquer produtos ou serviços que oferecemos. Todas as
          descrições de produtos ou preços de produtos são sujeitos a alteração a qualquer momento sem aviso prévio, a
          nosso critério exclusivo. Reservamo-nos o direito de descontinuar qualquer produto a qualquer momento.
          Qualquer oferta de produtos ou serviços neste site é nula onde for proibido por lei.

          Não garantimos que a qualidade de quaisquer produtos, serviços, informações ou outros materiais comprados ou
          obtidos por você vão atender às suas expectativas, ou que quaisquer erros no Serviço serão corrigidos.
        </p>
        <h4>SECÇÃO 6 - PRECISÃO DE COBRANÇA E INFORMAÇÕES DA CONTA</h4>
        <p>
          Nós nos reservamos o direito de recusar qualquer pedido que você fizer conosco. Podemos, a nosso próprio
          critério, limitar ou cancelar o número de produtos comprados por pessoa, por domicílio ou por pedido. Tais
          restrições podem incluir pedidos feitos na mesma conta de cliente, no mesmo cartão de crédito, e/ou pedidos
          que usem a mesma fatura e/ou endereço de entrega. Caso façamos uma alteração ou cancelemos um pedido, podemos
          tentar notificá-lo entrando em contato com o endereço de e-mail e/ou o número de telefone/endereço de
          faturamento fornecido no momento em que o pedido foi feito. Reservamo-nos o direito de limitar ou proibir
          pedidos que, a nosso critério exclusivo, pareçam ter sido feitos por lojistas, revendedores ou distribuidores.
          Você concorda em fornecer suas informações de conta e compra completas para todas as compras feitas em nossa
          loja. Você concorda em atualizar prontamente sua conta e outras informações, incluindo seu e-mail, números de
          cartão de crédito e datas de validade, para que possamos completar suas transações e contatar você quando
          preciso.

          Para mais informações, por favor, veja nossa Política de devolução.
        </p>
        <h4>SECÇÃO 7 - FERRAMENTAS OPCIONAIS</h4>
        <p>
          Podemos fornecer a você acesso a ferramentas de terceiros sobre as quais não monitoramos nem temos controle ou
          entrada.

          Você reconhece e concorda que nós fornecemos acesso a tais ferramentas no estado em que se encontram e
          conforme a disponibilidade, sem quaisquer garantias, declarações ou condições de qualquer tipo e sem qualquer
          endosso. Não nos responsabilizamos de forma alguma pelo seu uso de ferramentas opcionais de terceiros.

          O uso de ferramentas opcionais oferecidas por meio do site é inteiramente por sua conta e risco, e você deve
          se familiarizar e aprovar os termos das ferramentas que são fornecidas por fornecedor(es) terceiro(s).

          Também podemos, futuramente, oferecer novos serviços e/ou recursos por meio do site (incluindo o lançamento de
          novas ferramentas e recursos). Tais recursos e/ou serviços novos também devem estar sujeitos a esses Termos de
          serviço.
        </p>
        <h4>SECÇÃO 8 - LINKS DE TERCEIROS</h4>
        <p>
          Determinados conteúdos, produtos e serviços disponíveis através do nosso Serviço podem incluir materiais de
          terceiros.

          Os links de terceiros nesse site podem direcionar você a sites de terceiros que não são Afiliados a nós. Não
          nos responsabilizamos por examinar ou avaliar o conteúdo ou sua precisão. Não garantimos e nem temos obrigação
          ou responsabilidade por quaisquer materiais ou sites de terceiros, ou por quaisquer outros materiais, produtos
          ou serviços de terceiros.

          Não somos responsáveis por quaisquer danos ou prejuízos relacionados com a compra ou uso de mercadorias,
          serviços, recursos, conteúdo, ou quaisquer outras transações feitas em conexão com quaisquer sites de
          terceiros. Por favor, leia com cuidado as políticas e práticas de terceiros e certifique-se de que você as
          entende antes de efetuar qualquer transação. As queixas, reclamações, preocupações ou questões relativas a
          produtos de terceiros devem ser direcionadas à respectiva empresa terceira.
        </p>
        <h4>SECÇÃO 9 - COMENTÁRIOS, FEEDBACK E OUTRAS INTERAÇÕES DO USUÁRIO</h4>
        <p>
          Se, a nosso pedido, você executar determinadas ações específicas (por exemplo, inscrições em concursos) ou,
          sem solicitação de nossa parte, enviar ideias criativas, sugestões, propostas, planos ou outros materiais,
          seja online, por e-mail, correio ou de outra forma (em conjunto designados "comentários"), você concorda que
          podemos, a qualquer momento, sem restrições, editar, copiar, publicar, distribuir, traduzir e usar, em
          qualquer meio, quaisquer comentários que você encaminhar para nós. Não nos responsabilizamos por: (1) manter
          quaisquer comentários em sigilo; (2) indenizar por quaisquer comentários; ou (3) responder quaisquer
          comentários.
          Podemos, mas não temos a obrigação, de monitorar, editar ou remover conteúdo que nós determinamos a nosso
          próprio critério ser contra a lei, ofensivo, ameaçador, calunioso, difamatório, pornográfico, obsceno ou
          censurável, ou que viole a propriedade intelectual de terceiros ou estes Termos de serviço.
          Você concorda que seus comentários não violarão qualquer direito de terceiros, incluindo direitos autorais,
          marcas registradas, privacidade, personalidade ou outro direito pessoal ou de propriedade. Você concorda que
          os seus comentários não conterão material difamatório, ilegal, abusivo ou obsceno. Eles também não conterão
          nenhum vírus de computador ou outro malware que possa afetar a operação do Serviço ou qualquer site
          relacionado. Você não poderá usar endereço de e-mail falso, fingir ser alguém diferente de si mesmo ou, de
          outra forma, enganar a nós ou terceiros quanto à origem de quaisquer comentários. Você é o único responsável
          por quaisquer comentários que faz e pela veracidade deles. Nós não assumimos qualquer responsabilidade ou
          obrigação por quaisquer comentários publicados por você ou por terceiros.
        </p>
        <h4>SECÇÃO 10 - INFORMAÇÕES PESSOAIS</h4>
        <p>
          Sua apresentação de informações pessoais por meio da loja é regida pela nossa Política de privacidade.
          Consulte a nossa Política de privacidade.
        </p>
        <h4>SECÇÃO 11 - ERROS, IMPRECISÕES E OMISSÕES</h4>
        <p>
          Por vezes, pode haver informações em nosso site ou no Serviço que contenham erros tipográficos, imprecisões ou
          omissões que possam estar relacionadas a descrições de produtos, preços, promoções, ofertas, cobranças de
          frete de produtos, tempos de trânsito e disponibilidade. Reservamo-nos o direito de corrigir quaisquer erros,
          imprecisões ou omissões, e de alterar ou atualizar informações ou cancelar pedidos caso qualquer informação no
          Serviço ou em qualquer site relacionado seja imprecisa, a qualquer momento e sem aviso prévio (até mesmo
          depois de você ter enviado o seu pedido).

          Não assumimos nenhuma obrigação de atualizar, alterar ou explicar informações no Serviço ou em qualquer site
          relacionado, incluindo, entre outras, as informações sobre preços, exceto conforme exigido por lei. Nenhuma
          atualização específica ou data de atualização no Serviço ou em qualquer site relacionado deve ser utilizada
          para indicar que todas as informações do Serviço ou em qualquer site relacionado tenham sido modificadas ou
          atualizadas.
        </p>
        <h4>SECÇÃO 12 - USOS PROIBIDOS</h4>
        <p>
          Além de outras proibições estabelecidas nos Termos de serviço, você está proibido de usar o site ou seu
          conteúdo para: (a) qualquer finalidade ilícita; (b) solicitar a outros que realizem ou participem de atos
          ilegais; (c) violar quaisquer regulamentos, regras, leis ou leis locais, internacionais, federais, municipais
          ou estaduais; (d) infringir ou violar nossos direitos de propriedade intelectual ou os direitos de propriedade
          intelectual de terceiros; (e) assediar, abusar, insultar, prejudicar, difamar, caluniar, desacreditar,
          intimidar ou discriminar com base no gênero, orientação sexual, religião, etnia, raça, idade, nacionalidade ou
          deficiência; (f) apresentar informações falsas ou enganosas;
          (g) enviar ou transmitir vírus ou qualquer outro tipo de código malicioso, que será ou poderá ser usado de
          qualquer forma que afete a funcionalidade ou operação do Serviço ou de qualquer site relacionado, outros sites
          ou a internet; (h) coletar ou rastrear as informações pessoais de terceiros; (i) prática de spam, phishing,
          pharm, pretext, spider, crawl ou scrape; (j) qualquer propósito obsceno ou imoral; ou para (k) interferir ou
          contornar os recursos de segurança do Serviço ou de qualquer site relacionado, outros sites ou a internet.
          Reservamo-nos o direito de rescindir o seu uso do Serviço ou de qualquer site relacionado por violar qualquer
          um dos usos proibidos.
        </p>
        <h4>SECÇÃO 13 - ISENÇÃO DE GARANTIAS; LIMITAÇÃO DE RESPONSABILIDADE</h4>
        <p>
          Nós não prometemos, representamos ou garantimos que seu uso de nosso serviço será ininterrupto, oportuno,
          seguro ou livre de erros.
          Não garantimos que os resultados que possam ser obtidos pelo uso do serviço serão precisos ou confiáveis.

          Você concorda que, de tempos em tempos, podemos remover o serviço por períodos indefinidos de tempo ou
          cancelá-lo a qualquer momento, sem enviar aviso prévio para você.
          Você concorda que o seu uso ou incapacidade de usar o serviço é por sua conta e risco. O serviço e todos os
          produtos e serviços entregues através do serviço são (exceto conforme declarado por nós) fornecidos sem
          garantia e conforme a disponibilidade para seu uso, sem qualquer declaração, garantias ou condições de
          qualquer tipo, expressas ou implícitas, incluindo todas as garantias implícitas ou condições de
          comercialização, quantidade, adequação a uma finalidade específica, durabilidade, título e não violação.
          Em nenhum caso, a Amazon Portugal, nossos diretores, executivos, funcionários, Afiliados, agentes,
          contratados, estagiários, fornecedores, provedores de serviços ou licenciantes serão responsáveis por qualquer
          dano, perda, reivindicação ou qualquer dano direto, indireto, incidental, punitivo, especial ou consequencial
          de qualquer tipo, incluindo, entre outros, lucros perdidos, perda de receita, perda de economias, perda de
          dados, custos de substituição ou quaisquer danos semelhantes, seja com base em contrato, ato ilícito
          (incluindo negligência), responsabilidade estrita ou não, decorrentes do uso de qualquer um dos serviços ou
          quaisquer produtos adquiridos usando o serviço, ou para qualquer outra reivindicação relacionada de qualquer
          forma ao seu uso do serviço ou qualquer produto, incluindo, entre outros, quaisquer erros ou omissões em
          qualquer conteúdo, ou qualquer perda ou dano de qualquer tipo incorrido como resultado do uso do serviço ou de
          qualquer conteúdo (ou produto) publicado, transmitido ou de outra forma disponibilizado através do serviço,
          mesmo se avisado de sua possibilidade.
          Como alguns estados ou jurisdições não permitem a exclusão ou a limitação de responsabilidade por danos
          indiretos ou incidentais, em tais estados ou jurisdições, a nossa responsabilidade será limitada à extensão
          máxima permitida por lei.
        </p>
        <h4>SECÇÃO 14 - INDENIZAÇÃO</h4>
        <p>
          Você concorda em indenizar, defender e isentar Amazon Portugal e nossa matriz, subsidiárias, afiliadas,
          parceiros, executivos, diretores, agentes, contratados, licenciantes, prestadores de serviços, subcontratados,
          fornecedores, estagiários e funcionários, de qualquer reivindicação ou demanda, incluindo honorários
          advocatícios razoáveis, feitos por terceiros, devido a ou decorrente de sua violação destes Termos de serviço
          ou dos documentos que incorporam por referência, ou sua violação de qualquer lei ou dos direitos de terceiros.
        </p>
        <h4>SECÇÃO 15 - INDEPENDÊNCIA</h4>
        <p>
          No caso de qualquer disposição destes Termos de serviço ser considerada ilegal, nula ou inexequível, tal
          disposição será, no entanto, executável na extensão máxima permitida pela lei aplicável, e a parte inexequível
          será considerada como cortada destes Termos de serviço, e tal determinação não afetará a validade e
          aplicabilidade de quaisquer outras disposições remanescentes.
        </p>
        <h4>SECÇÃO 16 - RESCISÃO</h4>
        <p>
          As obrigações e as responsabilidades das partes incorridas antes da data de rescisão sobreviverão à rescisão
          deste contrato para todos os fins.

          Estes Termos de serviço permanecem em vigor, a menos que sejam rescindidos por você ou por nós. Você pode
          rescindir estes Termos de serviço a qualquer momento, notificando-nos que já não deseja utilizar os nossos
          serviços, ou quando você deixar de usar o nosso site.
          Se em nosso critério exclusivo você não cumprir com qualquer termo ou disposição destes Termos de serviço, nós
          também podemos rescindir este contrato a qualquer momento sem aviso prévio e você ficará responsável por todas
          as quantias devidas até a data da rescisão; também podemos lhe negar acesso a nossos Serviços (ou qualquer
          parte deles).
        </p>
        <h4>SECÇÃO 17 - ACORDO INTEGRAL</h4>
        <p>
          A falha de nossa parte em exercer ou executar qualquer direito ou disposição destes Termos de Serviço não
          constituirá uma renúncia de tal direito ou disposição.

          Estes Termos de serviço e quaisquer políticas ou normas operacionais publicadas por nós neste site ou no que
          diz respeito ao serviço constituem a totalidade do acordo entre nós. Estes termos regem o seu uso do Serviço,
          substituindo quaisquer acordos anteriores ou contemporâneos, comunicações e propostas, sejam verbais ou
          escritos, entre você e nós (incluindo, entre outros, quaisquer versões anteriores dos Termos de serviço).
          Quaisquer ambiguidades na interpretação destes Termos de serviço não devem ser interpretadas contra a parte
          que os redigiu.
        </p>

        <h4>SECÇÃO 18 - LEGISLAÇÃO APLICÁVEL</h4>
        <p>
          Estes Termos de serviço e quaisquer contratos separados nos quais fornecemos a você os Serviços serão regidos
          e interpretados de acordo com as leis de Rua Silva da Sousa, 42, Leira, PT-10, 2430-123, Portugal.
        </p>

        <h4>SECÇÃO 19 - MUDANÇAS NOS TERMOS DE SERVIÇO</h4>
        <p>
          Você pode revisar a versão mais atual dos Termos de serviço a qualquer momento nesta página.

          Reservamo-nos o direito, a nosso critério, de atualizar, modificar ou substituir qualquer parte destes Termos
          de serviço ao publicar atualizações e alterações no nosso site. É sua responsabilidade verificar
          periodicamente se há alterações em nosso site. Seu uso contínuo ou acesso ao nosso site ou ao Serviço após a
          publicação de quaisquer alterações a estes Termos de serviço constitui aceitação dessas alterações.
        </p>

        <h4>SECÇÃO 20 - INFORMAÇÕES DE CONTATO</h4>
        <p>
          Perguntas sobre os Termos de serviço devem ser enviadas para nós em leandroalmeida.270792@epnazare.eu.
        </p>
      </div>

    </main>
    <footer class="footer left border-top text-muted bg-light">

      <div class="container">

        <div class="row py-3">

          <div class="col-12 col-md-4 text-center">
            &copy; 2022 - Amazon Portugal <br>
            Rua Silva da Sousa, 42, Portugal/Leiria<br>
            CP 2430-123

          </div>

          <div class="col-12 col-md-4 text-center">

            <a href="privacidade.php" class="text-decoration-none text-dark">
              Politica de Privacidade
            </a> <br>

            <a href="sobre.php" class="text-decoration-none text-dark">
              Sobre a Amazon
            </a> <br>

            <a href="termos.php" class="text-decoration-none text-dark">
              Termos e Usos da Amazon
            </a> <br>

            <a href="trocas.php" class="text-decoration-none text-dark">
              Trocas e Devoluções
            </a> <br>

          </div>

          <div class="col-12 col-md-4 text-center">

            <a href="contacto.php" class="text-decoration-none text-dark">
              Contacto Pelo Site
            </a> <br> E-mail: <a href="email@dominio.com" class="text-decoration-none text-dark">
              email@dominio.com
            </a> <br> Telefone: <a href="Contacto:00351262777888" class="text-decoration-none text-dark">
              (+351) 1262777888
            </a> <br>

          </div>

        </div>

      </div>

    </footer>
  </div>
  <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>