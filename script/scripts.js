document.addEventListener("DOMContentLoaded", () => {
  axios
    .get('http://192.168.1.101:8080/php/getApi.php', {
      headers: {
        'Content-Type': 'application/json'
      }
    })
    .then((response) => {
      const movies = response.data;
      const content = document.querySelector("#content");

      content.innerHTML = '';

      movies.forEach(movie => {
        const row = document.createElement('div');
        row.classList.add('row');

        const titleDiv = document.createElement('div');
        titleDiv.classList.add('cell');
        titleDiv.textContent = movie.title;
        row.appendChild(titleDiv);

        const genreDiv = document.createElement('div');
        genreDiv.classList.add('cell');
        genreDiv.textContent = movie.genre.join(', ');
        row.appendChild(genreDiv);

        const dateDiv = document.createElement('div');
        dateDiv.classList.add('cell');
        dateDiv.textContent = movie.dateRelease;
        row.appendChild(dateDiv);

        const descriptionDiv = document.createElement('div');
        descriptionDiv.classList.add('cell');
        descriptionDiv.textContent = movie.description;
        row.appendChild(descriptionDiv);

        content.appendChild(row);
      });
    })
    .catch((error) => {
      console.error('Si è verificato un errore:', error);
    });
});

