<template>
  <div>

    <div class="p-[44px] bg-white rounded-t-2xl">

      <div class="flex items-center justify-between">
        <div class="">
          <h1 class="font-bold text-[28px] mb-0">Bem-vindo de volta, Pedro!</h1>
          <p class="mb-0 text-gray-400/90">Dashboard / Cadastro</p>
        </div>

        <div class="flex items-center gap-5">

          <img class="w-[55px] h-[55px] rounded-full" src="images/LayoutThree/placeholderUser.png" />

          <button
            class="w-[55px] h-[55px] rounded-full border border-gray-400/90 flex items-center justify-center text-gray-400/90 border border-gray-400/90">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
          </button>

          <button
            class="w-[55px] h-[55px] rounded-full border border-gray-400/90 flex items-center justify-center text-gray-400/90 border border-gray-400/90">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
            </svg>
          </button>

        </div>

      </div>

      <div class="border-b border-gray-400/90 mt-4 mb-6"></div>

      <div class="flex items-center gap-4 mb-[30px]">
        <input placeholder="Nome completo" class="flex-grow px-[24px] py-[12px] rounded-3xl border border-gray-300/90" />
        <input placeholder="Email" class="flex-grow px-[24px] py-[12px] rounded-3xl border border-gray-300/90" />
      </div>

      <div class="flex items-center gap-4 mb-[30px]">
        <input placeholder="Data de nascimento" class="flex-grow px-[24px] py-[12px] rounded-3xl border border-gray-300/90" />
        <input placeholder="Gênero" class="flex-grow px-[24px] py-[12px] rounded-3xl border border-gray-300/90" />
      </div>

      <div class="flex items-center gap-4 mb-[30px]">
        <input placeholder="Nacionalidade" class="flex-grow px-[24px] py-[12px] rounded-3xl border border-gray-300/90" />
        <input placeholder="Telefone" class="flex-grow px-[24px] py-[12px] rounded-3xl border border-gray-300/90" />
      </div>

      <div class="flex items-center gap-4 mb-[30px]">
        <input placeholder="Celular" class="flex-grow px-[24px] py-[12px] rounded-3xl border border-gray-300/90" />
        <input placeholder="Linkedin" class="flex-grow px-[24px] py-[12px] rounded-3xl border border-gray-300/90" />
      </div>

      <button class="text-white bg-[#013C94] px-[19px] py-[12px] rounded-2xl w-full">
        Salvar
      </button>

    </div>


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