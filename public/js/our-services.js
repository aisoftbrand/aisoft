const serviceTech = {
  "aisoft": ["Laravel", "PHP", "Livewire", "MySQL", "Forge"],
  "drip-marketing": ["Meta", "AdSense", "Sheets", "Apps Script"],
  "ai-solutions": ["Python", "LangChain", "HuggingFace", "Azure"],
  "ml-models": ["Python", "AWS", "HuggingFace"],
  "web-development": ["PHP", "Next.js", "Tailwind", "MySQL", "React", "MongoDB"],
  "app-development": ["Swift", "Xcode", "Android", "React Native", "Supabase"],
};

const techMap = document.getElementById("tech-map");
const svg = document.getElementById("tech-lines");

function renderTech(service) {
  // If the service doesn't exist, do nothing.
  if (!serviceTech[service]) {
    techMap.innerHTML = "";
    svg.innerHTML = "";
    return;
  }

  techMap.innerHTML = "";
  svg.innerHTML = "";

  const techs = serviceTech[service];
  const centerX = techMap.clientWidth / 2;
  const centerY = techMap.clientHeight / 2;
  const radius = 140;

  techs.forEach((tech, i) => {
    const angle = (2 * Math.PI / techs.length) * i;
    const x = centerX + radius * Math.cos(angle);
    const y = centerY + radius * Math.sin(angle);

    const node = document.createElement("div");
    node.className =
      "absolute px-4 py-2 rounded-full text-sm bg-purple-600/20 border border-purple-500/40 backdrop-blur text-purple-300";
    node.style.left = `${x}px`;
    node.style.top = `${y}px`;
    node.style.transform = "translate(-50%, -50%)";
    node.textContent = tech;

    techMap.appendChild(node);

    const line = document.createElementNS("http://www.w3.org/2000/svg", "line");
    line.setAttribute("x1", centerX);
    line.setAttribute("y1", centerY);
    line.setAttribute("x2", x);
    line.setAttribute("y2", y);
    line.setAttribute("stroke", "#8b5cf6");
    line.setAttribute("stroke-opacity", "0.6");
    line.setAttribute("stroke-dasharray", "4 6");
    svg.appendChild(line);
  });
}

document.querySelectorAll(".service-chip").forEach(btn => {
  btn.addEventListener("click", () => {
    document.querySelectorAll(".service-chip").forEach(b => b.classList.remove("active"));
    btn.classList.add("active");
    renderTech(btn.dataset.service);
  });
});

// Initial render
renderTech("aisoft");