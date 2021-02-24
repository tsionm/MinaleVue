<template>
  <div class="first">
    <!-- <div class="second">
      <img :src="'/images/che.png'" id="loading" alt="image" />
    </div> -->

    <!-- <div class="third">
      <img :src="'/images/stra.png'" id="loading2" />
    </div> -->

    <div class="container-fluid fourth  mt-5">
      <div class="row text-center">
        <img
          :src="'/images/fdc8a2a933fa3dc8bc89a8dc602d365e.jpg'"
          class="image-thumb img-responsive shadow"
          id="loader3"
        />
      </div>
      <div class="row text-center fifth">
        <div class="col-md-6 col-sm-12 col-xs-12 text-center shadow sixth">
          <h3 class="text-white mt-3"><b>Room Service</b></h3>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 text-center seventh">
          <a href="">
            <button class="btn shadow bt-1">
              <h3 class="text-center text-white">
                <b>Menu</b>
              </h3>
            </button>
          </a>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 text-center eighth">
          <a href="">
            <button class="btn shadow bt-2">
              <h4 class="text-center text-white mt-2">
                <b>Request a Waiter</b>
              </h4>
            </button>
          </a>
        </div>
      </div>
      <div class="row text-center ninth">
        <img
          :src="'/images/logo2.png'"
          class="image-thumb img-responsive"
          id="loader4"
        />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "App",
};
</script>

<style scoped>
.first {
  overflow: hidden !important;
}
.second {
  z-index: 1 !important;
  position: relative !important;
}
#loading {
  width: 500px !important;
  height: auto !important;
  margin-left: -250px !important;
  opacity: 0.8 !important;
}
.third {
  z-index: 2 !important;
  position: relative !important;
}
#loading2 {
  width: 250px !important;
  height: auto !important;
  opacity: 0.8 !important;
  margin-top: -250px !important;
  margin-left: 150px !important;
}
.fourth {
  z-index: 3 !important;
  position: relative !important;

}
#loader3 {
  width: auto !important;
  height: 110px !important;
  margin: 0% auto !important;
  border-radius: 10px !important;
}
.fifth {
  padding-top: 15px !important;
}
.sixth {
  margin-top: 10px !important;
  margin-bottom: 10px !important;
  padding: 15px !important;
  background-color: red !important;
}
.seventh {
  padding: 15px !important;
}
.bt-1 {
  width: 225px !important;
  height: 75px !important;
  background-color: red !important;
  border-radius: 45px !important;
}
.eighth {
  padding: 15px !important;
}
.bt-2 {
  width: 225px !important;
  height: 75px !important;
  background-color: orange !important;
  border-radius: 45px !important;
}
.ninth {
  padding-top: 10px !important;
}
#loader4 {
  width: 200px !important;
  height: auto !important;
  margin: 0% auto !important;
}
</style>