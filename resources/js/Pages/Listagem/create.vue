<template>
  <div>

    <div class="flex items-center justify-between">
      <div class="flex flex-col">
        <h1 class="text-[23px] font-bold">Dashboard</h1>
        <p class="text-[#969BA0] mb-[8px] text-[18px] ">Bem-vindo ao Proconph Admin!</p>
      </div>
      <div class="flex flex-col justify-end">
        <h2 class="text-[#222132] font-semibold text-[24px] flex justify-end">{{ time }}</h2>
        <p class="text-[#757971] font-[400] text-[12px]">{{ dateString }}</p>
      </div>
    </div>

    <section class="my-[24px]">
      <h1 class="font-semibold text-[14px] mb-[24px]">Informações Pessoais:</h1>
      
      <div class="flex items-center gap-[12px]">

        <div class="flex flex-grow flex-col bg-white border-l-[7px] border-[#12B886] px-[16px] py-[12px]">
          <label class="text-[#6F7187] text-[12px]">Nome de usuário</label>
          <input class="p-0 font-bold text-[14px] border-0 outline-0" type="text" value="joaosilva90">
        </div>

        <div class="flex flex-grow flex-col bg-white border-l-[7px] border-[#12B886] px-[16px] py-[12px]">
          <label class="text-[#6F7187] text-[12px]">Email</label>
          <input class="p-0 font-bold text-[14px] border-0 outline-0" type="text" value="example@gmail.com">
        </div>

        <div class="flex flex-grow flex-col bg-white border-l-[7px] border-[#12B886] px-[16px] py-[12px]">
          <label class="text-[#6F7187] text-[12px]">Nacionalidade</label>
          <input class="p-0 font-bold text-[14px] border-0 outline-0" type="text" value="Brasileira">
        </div>

      </div>

      <div class="flex items-center gap-[12px] mt-[24px]">

        <div class="flex flex-grow flex-col bg-white border-l-[7px] border-[#12B886] px-[16px] py-[12px]">
          <label class="text-[#6F7187] text-[12px]">Estado civil</label>
          <input class="p-0 font-bold text-[14px] border-0 outline-0" type="text" value="Solteiro">
        </div>

        <div class="flex flex-grow flex-col bg-white border-l-[7px] border-[#12B886] px-[16px] py-[12px]">
          <label class="text-[#6F7187] text-[12px]">Idiomas</label>
          <input class="p-0 font-bold text-[14px] border-0 outline-0" type="text" value="Português (nativo), Inglês (avançado)">
        </div>

        <div class="flex flex-grow flex-col bg-white border-l-[7px] border-[#12B886] px-[16px] py-[12px]">
          <label class="text-[#6F7187] text-[12px]">Educação</label>
          <input class="p-0 font-bold text-[14px] border-0 outline-0" type="text" value="Bacharel em Administração de Empresas">
        </div>

      </div>
    
    </section>

    <section class="mb-[24px]">
      <h1 class="font-semibold text-[14px] mb-[24px]">Profissional:</h1>
      
      <div class="flex items-center gap-[12px]">

        <div class="flex flex-grow flex-col bg-white border-l-[7px] border-[#12B886] px-[16px] py-[12px]">
          <label class="text-[#6F7187] text-[12px]">Experiência profissional:</label>
          <input class="p-0 font-bold text-[14px] border-0 outline-0" type="text" value="Analista de Marketing na Empresa ABC">
        </div>

        <div class="flex flex-grow flex-col bg-white border-l-[7px] border-[#12B886] px-[16px] py-[12px]">
          <label class="text-[#6F7187] text-[12px]">Ocupação</label>
          <input class="p-0 font-bold text-[14px] border-0 outline-0" type="text" value="Estudo">
        </div>

      </div>

      <div class="flex items-center gap-[12px] mt-[24px]">

        <div class="flex flex-grow flex-col bg-white border-l-[7px] border-[#12B886] px-[16px] py-[12px]">
          <label class="text-[#6F7187] text-[12px]">Número de telefone:</label>
          <input class="p-0 font-bold text-[14px] border-0 outline-0" type="text" value="(00) 12345-6789">
        </div>

        <div class="flex flex-grow flex-col bg-white border-l-[7px] border-[#12B886] px-[16px] py-[12px]">
          <label class="text-[#6F7187] text-[12px]">Hobbies</label>
          <input class="p-0 font-bold text-[14px] border-0 outline-0" type="text" value="Leitura, Cozinhar, Praticar esportes">
        </div>

      </div>
    
    </section>


    <button class="text-white bg-[#FF9141] px-[19px] py-[12px] rounded-[8px] w-full">
      Salvar
    </button>

  </div>
</template>

<script>
export default {
  data() {
    return {
      interval: null,
      time: null,
      dateString: null
    }
  },
  methods: {
    updateTime() {
      const now = new Date();
      // Obter as horas, minutos e segundos
      const hours = now.getHours();
      const minutes = now.getMinutes();
      const seconds = now.getSeconds();
      // Converter para formato AM/PM
      const timeString = hours >= 12 ? 'PM' : 'AM';
      const formattedHours = hours % 12 || 12;
      const formattedMinutes = minutes < 10 ? '0' + minutes : minutes;
      const formattedSeconds = seconds < 10 ? '0' + seconds : seconds;
      // Atualizar o estado
      this.time = `${formattedHours}:${formattedMinutes}:${formattedSeconds} ${timeString}`;
    },
    updateDateString() {
      const now = new Date();
      // Obter o dia da semana, dia do mês, mês e ano
      const daysOfWeek = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
      const monthsOfYear = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];
      const dayOfWeek = daysOfWeek[now.getDay()];
      const dayOfMonth = now.getDate();
      const month = monthsOfYear[now.getMonth()];
      const year = now.getFullYear();
      // Construir a string de data
      this.dateString = `${dayOfWeek}, ${dayOfMonth} de ${month} de ${year}`;
    }
  },
  created() {
    // Atualizar o tempo a cada segundo
    this.interval = setInterval(() => {
      this.updateTime();
    }, 1000);

    // Atualizar a string de data a cada segundo
    this.interval = setInterval(() => {
      this.updateDateString();
    }, 1000);
  },
  beforeDestroy() {
    // Prevenir vazamento de memória
    clearInterval(this.interval);
  }
}
</script>