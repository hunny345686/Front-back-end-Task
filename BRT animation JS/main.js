let allData = [
  {
    title: "Web & App Development Services",
    desc: "From mobile app development to website design services, we provide full-cycle and custom software development solutions across cross-platform channels.",
    link: "/Web-Dev-App",
    image:
      "https://images.unsplash.com/photo-1626702878460-a3cb04027d4e?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    color: "red",
  },
  {
    title: "Graphic Design & Animation Services",
    desc: " Our broad range of game development solutions encompasses creating 2D/3D games, iOS games, Android games, Unity3D games, PC & Desktop games...",
    link: "./media",
    image:
      "https://images.unsplash.com/photo-1626976270431-9cb555be3685?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    color: "#dedede",
  },
  {
    title: "Game Development Services",
    desc: "Shape your ideas into high-quality graphics, 2D/3D animation, and music videos with our graphic design, VFX, and video production services...",
    link: "/ecomrse",
    image:
      "https://images.unsplash.com/photo-1593642532009-6ba71e22f468?ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxMXx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    color: "#e8f0fe",
  },
  {
    title: "eCommerce Development",
    desc: "From mobile app development to website design services, we provide full-cycle and custom software development solutions across cross-platform channels...",
    link: "./ecommerce-development-service",
    image:
      "https://images.unsplash.com/photo-1610851252127-85442ca5528e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80",
    color: "#d2eade",
  },
];

let no = 0;

const changeText = setInterval(function () {
  document.getElementById("changeText").innerText = allData[no].title;
  changePar.innerText = allData[no].desc;
  let link = allData[no].link;
  Links.setAttribute("href", link);
  img.src = allData[no].image;
  container.style.backgroundColor = allData[no].color;
  no++;

  if (no == allData.length) no = 0;
}, 5000);
