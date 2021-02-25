let start = 0;
let limit = 10;
let isMax = false;
let loading = false;

const loadData = document.querySelector("#loadData");
const loadmore = document.querySelector("#loadmore");

const observer = new IntersectionObserver((entries) => {
  if (entries[0].isIntersecting && !isMax) {
    start = start + limit;
    getData(start, limit);
  }
});

if (loadmore) observer.observe(loadmore);

async function getData(start, limit) {
  if (isMax) return;
  loading = true;
  const res = await fetch(`core/get_data.php?start=${start}&limit=${limit}`);
  const data = await res.json();
  const news = data.data;
  if (news) {
    news.map((item) => {
      let html = `
        <a href="${item.url}" target="_blank">
          <div class="images--item">
            <img
            src="${item.image}"
            alt="news"
            />
            <h1 class="line-clamp-1">${item.title}</h1>
            <p>${item.description}</p>
          </div>
        </a>
      `;
      loadData.innerHTML += html;
    });
  } else {
    isMax = true;
    loadmore.innerHTML = "<p >No More Content</p>";
  }
  loading = false;
}
