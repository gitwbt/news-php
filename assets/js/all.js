let start=0,limit=10,isMax=!1,loading=!1;const loadData=document.querySelector("#loadData"),loadmore=document.querySelector("#loadmore"),observer=new IntersectionObserver((a=>{a[0].isIntersecting&&!isMax&&(start+=limit,getData(start,limit))}));async function getData(a,t){if(isMax)return;loading=!0;const e=await fetch(`core/get_data.php?start=${a}&limit=${t}`),n=(await e.json()).data;n?n.map((a=>{let t=`\n        <a href="${a.url}" target="_blank">\n          <div class="images--item">\n            <img\n            src="${a.image}"\n            alt="news"\n            />\n            <h1 class="line-clamp-1">${a.title}</h1>\n            <p>${a.description}</p>\n          </div>\n        </a>\n      `;loadData.innerHTML+=t})):(isMax=!0,loadmore.innerHTML="<p >No More Content</p>"),loading=!1}loadmore&&observer.observe(loadmore);