<template>
  <div class="relative">

    <ChatBtn />

    <nav class="border-b border-[#D9DCDF] flex justify-between items-center bg-white px-[140px] py-[24px]">
      <img src="images/Logo.png" />
      <ul class="flex items-center gap-[55px]">
        <li class="font-bold text-[#E81212] border-b-2 border-[#E81212] pb-2">
          <a href="#">
            Home
          </a>
        </li>
        <li class="font-bold ">
          <a href="#">
            Saber Mais
          </a>
        </li>
        <li class="font-bold ">
          <a href="#">
            Política de Privacidade
          </a>
        </li>
        <li class="font-bold ">
          <a href="#">
            Solicitar Proposta
          </a>
        </li>
        <li>
          <button class="px-[63px] py-[14px] text-white bg-[#E81212]">Login</button>
        </li>
      </ul>
    </nav>
    <div class="bg-[#F7F7F7] flex items-center justify-center relative my-[39px]">
      <img class="absolute top-0 left-[200px]" src="images/vector2.png" />
      <img class="absolute bottom-0 left-[295px]" src="images/vector3.png" />
      <img class="absolute  top-0 right-[54px] " src="images/vector4.png" />
      <div class="flex items-center justify-center flex-col relative px-[49px] ">
        <img class="absolute top-[98px] z-0 left-0" src="images/borderBottom.png" />
        <h1 class="mb-0 text-center text-[86px] z-20 font-bold text-line">
          Soluções personalizadas de <br> software em até 30 dias, com o <br> melhor preço do mercado.
        </h1>
        <p class="my-[39px] text-[#717171] text-[26px]">Qualidade garantida. Inovação. Garantia do seu investimento.
          Suporte.</p>
        <div class="flex items-center gap-[26px] justify-center">
          <button
            class="w-[237px] py-[14px] rounded-[62px] flex items-center justify-center text-white bg-[#E81212] font-bold text-[16px]">Falar
            com Especialista</button>
          <button
            class="w-[237px] py-[14px] rounded-[62px] flex items-center justify-center text-white bg-[#011375] font-bold text-[16px]">+
            1000 clientes satisfeitos</button>
        </div>
      </div>
    </div>
    <section class="px-[200px] py-[40px]">
      <div class=" flex items-center justify-center">

        <div class="flex-grow">
          <img src="images/CircleLayer.png" />
          <h1 class="font-bold text-[22px] mb-[10px]">Levantamento</h1>
          <ul>
            <li class="text-[#999999] font-semibold text-[14px] mb-1">Especificação Funcional</li>
            <li class="text-[#999999] font-semibold text-[14px] mb-1">Casos de Uso</li>
            <li class="text-[#999999] font-semibold text-[14px] mb-1">Identificação das Necessidades</li>
            <li class="text-[#999999] font-semibold text-[14px] mb-1">Protótipo Navegável</li>
          </ul>
        </div>

        <div class="flex-grow">
          <img src="images/ObjectUngroup.png" />
          <h1 class="font-bold text-[22px] mb-[10px]">Planejamento</h1>
          <ul>
            <li class="text-[#999999] font-semibold text-[14px] mb-1">Cronograma</li>
            <li class="text-[#999999] font-semibold text-[14px] mb-1">Arquitetura</li>
            <li class="text-[#999999] font-semibold text-[14px] mb-1">Modelagem de dados</li>
            <li class="text-[#999999] font-semibold text-[14px] mb-1">Fluxograma</li>
          </ul>
        </div>

        <div class="flex-grow">
          <img src="images/ObjectUngroup.png" />
          <h1 class="font-bold text-[22px] mb-[10px]">Desenvolvimento</h1>
          <ul>
            <li class="text-[#999999] font-semibold text-[14px] mb-1">Banco de Dados</li>
            <li class="text-[#999999] font-semibold text-[14px] mb-1">Back-end</li>
            <li class="text-[#999999] font-semibold text-[14px] mb-1">Front-end</li>
            <li class="text-[#999999] font-semibold text-[14px] mb-1">Plano de Testes</li>
          </ul>
        </div>

        <div class="flex-grow">
          <img src="images/UserArrows.png" />
          <h1 class="font-bold text-[22px] mb-[10px]">Implementação</h1>
          <ul>
            <li class="text-[#999999] font-semibold text-[14px] mb-1">Apresentação</li>
            <li class="text-[#999999] font-semibold text-[14px] mb-1">Ajustes</li>
            <li class="text-[#999999] font-semibold text-[14px] mb-1">Homologação final</li>
            <li class="text-[#999999] font-semibold text-[14px] mb-1">Liberação</li>
          </ul>
        </div>
      </div>

      <div class="bg-[#142032] rounded-3xl mt-[40px] p-[100px] flex items-center justify-center">
        <div class="flex flex-col w-[50%]">
          <h1 class="text-[#FF2929] font-bold text-[32px]">Como fazemos.</h1>
          <h2 class="text-white font-bold text-[32px]">Priorizamos a surpresa positiva aos <br> clientes com serviços
            de qualidade.</h2>
          <p class="text-white text-[20px] mt-[16px]">Iniciamos o desenvolvimento com uma equipe comprometida,<br>
            seguindo as últimas definições de usabilidade e linguagens de <br> programação.</p>
        </div>
        <div class="w-[50%] flex flex-col gap-y-[33px]">
          <div class="flex items-center justify-between gap-[33px]">
            <div
              class=" rounded-full border-2 border-gray-100/90 flex flex-col border-dashed flex-grow w-[295px] h-[184px] flex items-center justify-center">
              <span class="text-[32px] font-bold text-white">13000 <span
                  class="text-[16px] font-semibold">h/mês</span></span>
              <span class="mb-0 text-[18px] font-bold text-white">Desenvolvimento</span>
              <span class="mb-0 text-[18px] font-bold text-white">Web</span>
            </div>
            <div
              class=" rounded-full border-2 border-gray-100/90 flex flex-col border-dashed flex-grow w-[295px] h-[184px] flex items-center justify-center">
              <span class="text-[32px] font-bold text-white">7000 <span
                  class="text-[16px] font-semibold">h/mês</span></span>
              <span class="mb-0 text-[18px] font-bold text-white">Gestão de </span>
              <span class="mb-0 text-[18px] font-bold text-white">Projetos</span>
            </div>
          </div>
          <div class="flex items-center justify-between gap-[33px]">
            <div
              class=" rounded-full border-2 border-gray-100/90 flex flex-col border-dashed flex-grow w-[295px] h-[184px] flex items-center justify-center">
              <span class="text-[32px] font-bold text-white">4000 <span
                  class="text-[16px] font-semibold">h/mês</span></span>
              <span class="mb-0 text-[18px] font-bold text-white">Melhorias e Pós</span>
              <span class="mb-0 text-[18px] font-bold text-white">Vendas</span>
            </div>
            <div
              class=" rounded-full border-2 border-gray-100/90 flex flex-col border-dashed flex-grow w-[295px] h-[184px] flex items-center justify-center">
              <span class="text-[32px] font-bold text-white">5000 <span
                  class="text-[16px] font-semibold">h/mês</span></span>
              <span class="mb-0 text-[18px] font-bold text-white">Suporte ao</span>
              <span class="mb-0 text-[18px] font-bold text-white">Cliente</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-[#F7F7F7] px-[200px] py-[92px]">
      <div class="flex items-center gap-[121px] justify-center">
        <img src="images/Frame1.png" />
        <div class="flex flex-col gap-y-[20px]">
          <h1 class="font-bold text-[32px]">Garantimos a melhor <br> experiência do usuário final</h1>

          <div class="flex items-center gap-[8px]">
            <div class="w-[28px] h-[28px] rounded-full flex items-center justify-center bg-[#E81212] text-white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
            <p>Priorizamos a funcionalidade e a <br> experiência do usuário.</p>
          </div>

          <div class="flex items-center gap-[8px]">
            <div class="w-[28px] h-[28px] rounded-full flex items-center justify-center bg-[#E81212] text-white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
            <p>Entregamos soluções digitais eficazes <br>e satisfatórias.</p>
          </div>

          <div class="flex items-center gap-[8px]">
            <div class="w-[28px] h-[28px] rounded-full flex items-center justify-center bg-[#E81212] text-white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
            <p>Focamos em estética, layout e <br> facilidade de uso.</p>
          </div>

          <div class="flex items-center gap-[8px]">
            <div class="w-[28px] h-[28px] rounded-full flex items-center justify-center bg-[#E81212] text-white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
            <p>Buscamos verdadeira satisfação do <br> cliente.</p>
          </div>

          <div class="flex items-center gap-[8px]">
            <div class="w-[28px] h-[28px] rounded-full flex items-center justify-center bg-[#E81212] text-white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
            <p>Desenvolvemos soluções leves, fáceis <br> e agradáveis.</p>
          </div>

        </div>
      </div>
    </section>

    <section class="relative py-[45px] flex items-center justify-center">
      <img class="w-full h-full absolute" src="images/Bg.png" />
      <div class="z-50">
        <h1 class="font-bold text-center text-[32px] mb-[64px]"><span
            class="border-b-4 border-[#E81212]">Palavras</span> da <span class="text-[#E81212]">ProConph</span></h1>
        <p class="font-bold text-[32px]">
          A programação tudo é possivel, muitas <br> vezes até o impossível é questão de <br> programação <span
            class="w-[57px] h-[6px] bg-[#E81212]"></span>
        </p>
        <p class="text-[#909090] text-[18px]">Os profissionais que trabalham em nossa empresa são reconhecidos no <br>
          setor de TI e normalmente enfrentam desafios dinâmicos, facilitando a <br> comunicação e garantindo um
          trabalho de qualidade.</p>

        <div class="flex items-center justify-between mt-[16px]">

          <div class="flex items-center gap-[8px]">
            <div class="w-[28px] h-[28px] rounded-full flex items-center justify-center bg-[#013C94] text-white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
            <p class="font-[400] text-[16px] mb-0">Integrando cliente e time de <br> desenvolvimento garantindo <br>
              status atualizados.</p>
          </div>

          <div class="flex items-center gap-[8px]">
            <div class="w-[28px] h-[28px] rounded-full flex items-center justify-center bg-[#013C94] text-white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
            <p class="font-[400] text-[16px] mb-0">Garantir a qualidade nos <br> processos de desenvolvimento <br> dos
              sistemas e testes antes da <br> entrega.</p>
          </div>

        </div>

        <div class="flex items-center justify-between mt-[16px]">

          <div class="flex items-center gap-[8px]">
            <div class="w-[28px] h-[28px] rounded-full flex items-center justify-center bg-[#013C94] text-white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
            <p class="font-[400] text-[16px] mb-0">Transformando problemas em <br> soluções criativas, mantendo <br>
              sempre o usuário em foco.</p>
          </div>

          <div class="flex items-center gap-[8px]">
            <div class="w-[28px] h-[28px] rounded-full flex items-center justify-center bg-[#013C94] text-white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
            <p class="font-[400] text-[16px] mb-0">Conhecimento avançado das <br> principais tecnologias do <br>
              mercado.</p>
          </div>

        </div>

        <div class="flex items-center justify-center my-[32px]">
          <button
            class="px-[56px] py-[14px] bg-[#E81212] rounded-full text-white font-bold text-[16px] border-4 border-[#f78d8d]">Solicitar
            Proposta</button>
        </div>

      </div>
    </section>

    <section>
      <h1 class="font-bold text-center text-[32px] my-[64px]">Clientes e <span class="text-[#E81212]">Parceiros</span>
      </h1>

      <div class="flex items-center gap-[60px] justify-center mb-[56px]">

        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 2.png" />
        </div>
        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 3.png" />
        </div>
        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 4.png" />
        </div>
        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 6.png" />
        </div>
        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 5.png" />
        </div>
        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 8.png" />
        </div>

      </div>

      <div class="flex items-center gap-[60px] justify-center mb-[56px]">

        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 7.png" />
        </div>
        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 9.png" />
        </div>
        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 4 (1).png" />
        </div>
        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 7 (1).png" />
        </div>
        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 5 (1).png" />
        </div>
        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 6 (1).png" />
        </div>

      </div>

      <div class="flex items-center gap-[60px] justify-center mb-[56px]">

        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 2.png" />
        </div>
        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 3.png" />
        </div>
        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 4.png" />
        </div>
        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 6.png" />
        </div>
        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 5.png" />
        </div>
        <div
          class="w-[202px] h-[161px] rounded-[5px] border-2 border-[#DEE4E9] shadow-2xl flex items-center justify-center">
          <img src="images/image 8.png" />
        </div>

      </div>

    </section>

    <section class="bg-[#142032] px-[307px] py-[80px] ">
      <h1 class="text-white font-bold text-[32px] text-center mb-[56px]">Projetos da <span
          class="text-[#E81212]">ProConph</span></h1>
      <div class="flex justify-between items-center gap-[85px]">

        <div class="flex flex-col">
          <img src="images/GRUPO-SOMA-.jpg.png" />
          <span class="my-[27px] text-white">Customer Stories</span>
          <p class="mb-[31px] text-white">
            Utilizando a plataforma Proconph como back <br> bone do seu comércio digital, o Grupo Abecede, <br>
            atualmente com mais de…
          </p>
          <div class="flex gap-[11px] items-center">
            <div class="bg-white w-[30px] h-[30px] rounded-full"></div>
            <span class="text-[#717786] text-[15px]">Fernanda Chilaze</span>
          </div>
        </div>

        <div class="flex flex-col">
          <img src="images/GRUPO-SOMA-.jpg.png" />
          <span class="my-[27px] text-white">Customer Stories</span>
          <p class="mb-[31px] text-white">
            Utilizando a plataforma Proconph como back <br> bone do seu comércio digital, o Grupo Abecede, <br>
            atualmente com mais de…
          </p>
          <div class="flex gap-[11px] items-center">
            <div class="bg-white w-[30px] h-[30px] rounded-full"></div>
            <span class="text-[#717786] text-[15px]">Fernanda Chilaze</span>
          </div>
        </div>

        <div class="flex flex-col">
          <img src="images/GRUPO-SOMA-.jpg.png" />
          <span class="my-[27px] text-white">Customer Stories</span>
          <p class="mb-[31px] text-white">
            Utilizando a plataforma Proconph como back <br> bone do seu comércio digital, o Grupo Abecede, <br>
            atualmente com mais de…
          </p>
          <div class="flex gap-[11px] items-center">
            <div class="bg-white w-[30px] h-[30px] rounded-full"></div>
            <span class="text-[#717786] text-[15px]">Fernanda Chilaze</span>
          </div>
        </div>

      </div>
      <div class="flex items-center justify-between mt-[56px]">
        <div class="flex items-center gap-4">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            class="w-8 h-8 text-gray-100/90">
            <path fill-rule="evenodd"
              d="M7.28 7.72a.75.75 0 0 1 0 1.06l-2.47 2.47H21a.75.75 0 0 1 0 1.5H4.81l2.47 2.47a.75.75 0 1 1-1.06 1.06l-3.75-3.75a.75.75 0 0 1 0-1.06l3.75-3.75a.75.75 0 0 1 1.06 0Z"
              clip-rule="evenodd" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-white">
            <path fill-rule="evenodd"
              d="M16.72 7.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 1 1-1.06-1.06l2.47-2.47H3a.75.75 0 0 1 0-1.5h16.19l-2.47-2.47a.75.75 0 0 1 0-1.06Z"
              clip-rule="evenodd" />
          </svg>
        </div>
        <button class="px-[33px] py-[17px] rounded-[6px] text-white text-[13px] bg-[#E81212]">VER MAIS</button>
      </div>
    </section>

  </div>
</template>

<script setup>
import ChatBtn from "./ChatBtn.vue"

</script>

<style>
.text-line {
  line-height: 85px;
  letter-spacing: -4%;
}
</style>