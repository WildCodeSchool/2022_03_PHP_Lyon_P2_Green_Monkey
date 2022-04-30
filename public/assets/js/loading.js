// hide results from the start
const results = document.getElementById('results');
results.style.display = 'none';

// function to hide spinning monkey and show results
setTimeout(() => {
    const loading = document.getElementById('loading');
    const results = document.getElementById('results');

    loading.style.display = 'none';
    results.style.display = 'block';
  }, 3000);
