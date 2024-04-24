<template>
  <div class="hello">
    <!-- define SVG glow effect here -->
    <svg width="0" height="0">
      <defs>
        <filter id="glow">
          <feGaussianBlur stdDeviation="5" />
          <feComponentTransfer>
            <feFuncA type="linear" slope="2" />
          </feComponentTransfer>
          <feBlend in2="SourceGraphic" />
        </filter>
      </defs>
    </svg>

    <div class="box">
      <round-slider
        id="slider1"
        v-model="sliderValue"
        line-cap="round"
        circle-shape="pie"
        start-angle="315"
        border-width="1"
        :tooltip-format="tooltipFormatter"
      ></round-slider>
    </div>
  </div>
</template>

<script>
import RoundSlider from "vue-round-slider";

export default {
  name: "SliderDemo",
  components: {
    RoundSlider,
  },
  data() {
    return {
      sliderValue: 60,
    };
  },
  methods: {
    tooltipFormatter(e) {
      if (e.value === 100) {
        return "Completed <br> 100%";
      }
      return `Progress <br> ${e.value} %`;
    },
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
.box {
  padding: 10px;
  display: inline-block;
}
/* define the shadow effect for range here */
#slider1 .rs-range {
  filter: url(#glow);
}

/* customize the tooltip appearance here */
#slider1 .rs-tooltip-text {
  font-size: 16px;
}

#slider1 .rs-inner-container,
#slider1 svg {
  overflow: visible;
}
</style>
