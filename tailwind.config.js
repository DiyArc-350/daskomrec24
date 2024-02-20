/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
     "./resources/views/caas/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],theme: {
    extend: {
      backgroundImage: {
        "welcome-dungeon": "url('/assets/caas/homepage/dugbg1.png')",
        "play-dungeon": "url('/assets/caas/dashboardcaas/dugbg2.png')",
      },
      boxShadow: {
        "semi-sm": "0px 0px 8px 2px rgba(0, 0, 0, 0.3)",
        "in-semi-sm": "inset 0px 0px 8px 2px rgba(0, 0, 0, 0.3)",
        "semi-lg": "0px 0px 50px 1px rgba(0, 0, 0, 0.3)",
        "semi-xl": "0px 0px 10px 1px rgba(0, 0, 0, 0.3)",
      },
      fontFamily: {
        'ringbearer': ['"Ringbearer"'],
        'enchanted': ['"Enchanted"'],
        'vinque': ['"Vinque"'],
        'blackcha': ['"Blackcha"'],
      },
      width: {
        0.25: "0.0625rem",
        108: "16rem",
        110: "19rem",
        112: "21rem",
        115: "23rem",
        117: "27rem",
        120: "28rem",
        130: "36rem",
        140: "40rem",
        170: "50rem",
      },
      height: {
        130: "36rem",
        124: "33rem",
        120: "30rem",
        118: "28rem",
        117: "27rem",
        116: "25rem",
        115: "23rem",
        112: "21rem",
      },
      colors:{
        // judul landing, tagline, 
        'primary': '#A37651',

        // judul contact-asisten,
        'fourdary': '#C1B189',

        // judul warning, judul schedule, text-schedule,
        'fivedary': '#FFFFFF',

        // judul choose role + tour role
        'sixdary': '#D2C2B4',

        // border judul, tagline,
        'black': '#000000',

        // header table, bg-button-pilih
        'dark': '#263334',

        // body table, bg-button-pilih-penuh
        'light': '#445D5F',

        // text-table-penuh
        'butter': '#181C26',

        //bg-login landing, bg-login caas, bg-chang pass
        'coklat': '#6E5743',

        // bg-schedule
        'coklat-muda': '#8E7655',

        // bg-warning, hover-navbar-logout
        'merah': '#812B2D',

        // judul card-login, judul card-changepass, text-login caas, text-changepass, text-profile, 
        // text-dlor24-profile, judul+text announcement, text-button-schedule, text-warning, text-navbar
        'secondary': '#1E1E1E',

        // input nim+ pass-login, input change pass
        'gray': '#514D4D',

        // text biodata caas+assiten,
        'tridary': '#C4B58F',

        // text kode asisten-contact, text-dlor24-contact,
        'coklat-tua': '#211A16',

        // hover: text-schecule
        'coklat-terang': '#5C2C06',

        // hover: button warning
        'merah-tua': '#450a0a',

        // NAVBAR KHSUUS
        // burger
        'gray-dark': '#425152',
        // hover-true
        'green': '#166534',
        'hijau-gelap': '#0E131A',
      },
      screens:{
        'mobile-L' : '425px',
        'mobile-M' : '375px',
        'tablet'   : '768px',
        'laptop'   : '1024px',
      },
      cursor: {
        "sword": "url('/assets/caas/cursor/sword.cur'), default",
      },
    },
  },
  plugins: [
  ],
}



