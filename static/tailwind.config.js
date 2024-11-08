/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js}"],
  theme: {
    container: {
      center: true,
      padding: "2rem",
    },
    extend: {
      fontFamily: {
        montserrat: "Montserrat",
        economica: "Economica",
        comingSoon: "CommingSoon",
      },
      colors: {
        light: "#fff",
        dark: "#433D3C",
        primary: "#FAF3EB",
        secondary: "#F6AD49",
        accent: "#D9333E",
      },
      backgroundImage: {
        menu: "linear-gradient(rgba(0,0,0,0.0), rgba(0,0,0,0.0)),  url('../img/wood.jpg')",
        list: "linear-gradient(rgba(0,0,0,0.0), rgba(0,0,0,0.0)),  url('../img/bg.png')",
      },
    },
  },
  plugins: [],
};
