<script src="https://cdn.tailwindcss.com"></script>

<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          ugcOrange: '#f37021',
          ugcDark: '#d95a15',
        },
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
        }
      }
    }
  }
</script>
<style>
  .marquee-container {
    overflow: hidden;
    white-space: nowrap;
    box-sizing: border-box;
    width: 100%;
    background: #f8fafc;
    border-bottom: 1px solid #e2e8f0;
    padding: 4px 0;
    font-size: 0.875rem;
    color: #dc2626;
    font-weight: 500;
  }

  .marquee-content {
    display: inline-block;
    animation: marquee 35s linear infinite;
  }

  @keyframes marquee {
    0% {
      transform: translateX(100%);
    }

    100% {
      transform: translateX(-100%);
    }
  }
</style>