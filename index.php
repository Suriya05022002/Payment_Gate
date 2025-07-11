<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Transformation Plans - One-Time Investment</title>
    <!-- <link rel="stylesheet" href="index.css"> -->
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
<style>
     /* Base styles from Tailwind's base/preflight */
        *, *::before, *::after {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
            -webkit-font-smoothing: antialiased;
        font-family: 'Work Sans', sans-serif;
        }

        h1, h2, h3, p, ul, button {
            margin: 0;
            padding: 0;
        }
        ul {
            list-style: none;
        }
        button {
            background: none;
            border: none;
            cursor: pointer;
            text-align: center;
        }
        a {
            text-decoration: none;
            color: inherit;
        }

        /* Custom scrollbar removal (retained from your Tailwind code) */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Responsive Font Sizes increased by about 3-4px from original */
        /* text-[14px] sm:text-[15px] md:text-[16px] lg:text-[17px] xl:text-[18px] */
        body {
            font-size: 14px;
            color: #1a1a3d; /* Tailwind text-[#1a1a3d] */
            background-color: #ffffff; /* Tailwind bg-white */
        }
        @media (min-width: 640px) { /* sm */
            body { font-size: 17px; }
        }
        @media (min-width: 768px) { /* md */
            body { font-size: 18px; }
        }
        @media (min-width: 1024px) { /* lg */
            body { font-size: 18px; }
        }
        @media (min-width: 1280px) { /* xl */
            body { font-size: 18px; }
        }

        /* Main Container */
        .pricing-container {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            padding: 64px 32px; /* py-10 px-4 */
        }
        @media (min-width: 640px) { /* sm */
            .pricing-container { padding-top: 56px; padding-bottom: 56px; } /* sm:py-14 */
        }
        @media (min-width: 768px) { /* md */
            .pricing-container { padding-top: 64px; padding-bottom: 64px; } /* md:py-16 */
        }
        @media (min-width: 1024px) { /* lg */
            .pricing-container { padding-top: 80px; padding-bottom: 80px; } /* lg:py-20 */
        }

        /* Heading */
        .main-heading {
            text-align: center;
            font-weight: 700; /* font-semibold */
            font-size: 48px;
            line-height: 1.25; /* leading-tight */
            margin-bottom: 24px; /* mb-1 */
        }
 .pricing-container h2{
        font-size: 2.3rem;
           }
        @media (min-width: 640px) { .main-heading { font-size: 20px; } } /* sm */
        @media (min-width: 768px) { .main-heading { font-size: 22px; } } /* md */
        @media (min-width: 1024px) { .main-heading { font-size: 24px; } } /* lg */
        @media (min-width: 1280px) { .main-heading { font-size: 26px; } } /* xl */

        .subtitle {
            text-align: center;
            color: #6b6b8a; /* text-[#6b6b8a] */
            font-size: 18px;
            margin-bottom: 40px; /* mb-8 */
        }
        @media (min-width: 640px) { /* sm */
            .subtitle { font-size: 13px; margin-bottom: 48px; } /* sm:text-[9px] sm:mb-10 */
        }
        @media (min-width: 768px) { /* md */
            .subtitle { font-size: 14px; margin-bottom: 56px; } /* md:text-[10px] md:mb-12 */
        }
        @media (min-width: 1024px) { /* lg */
            .subtitle { font-size: 15px; } /* lg:text-[11px] */
        }
        @media (min-width: 1280px) { /* xl */
            .subtitle { font-size: 16px; } /* xl:text-[12px] */
        }

        /* Plan Cards Container */
        .plan-cards-wrapper {
            display: flex;
            flex-direction: column; /* flex-col */
            gap: 32px; /* gap-6 */
            justify-content: center; /* justify-center */
        }
        @media (min-width: 640px) { /* sm */
            .plan-cards-wrapper { flex-direction: row; gap: 40px; } /* sm:flex-row sm:gap-8 */
        }
        @media (min-width: 768px) { /* md */
            .plan-cards-wrapper { gap: 40px; } /* md:gap-10 */
        }
        @media (min-width: 1024px) { /* lg */
            .plan-cards-wrapper { gap: 48px; } /* lg:gap-12 */
        }
        @media (min-width: 1280px) { /* xl */
            .plan-cards-wrapper { gap: 56px; } /* xl:gap-14 */
        }

        /* Individual Plan Card */
        .plan-card {
            display: flex;
            flex-direction: column; /* flex-col */
            border: 1px solid #e6e6f0; /* border border-[#e6e6f0] */
            border-radius: 8px; /* rounded-lg */
            padding: 32px 28px; /* px-6 py-7 increased from original */
            max-width: 320px;
            flex: 1; /* flex-1 */
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgb(0 0 0 / 0.05);
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            position: relative; /* For absolute positioning of 'MOST POPULAR' */
        }
        @media (min-width: 640px) { /* sm */
            .plan-card { padding: 32px 28px; max-width: 280px; } /* sm:px-7 sm:py-8 sm:max-w-[280px] */
        }
        @media (min-width: 768px) { /* md */
            .plan-card { padding: 36px 32px; max-width: 300px; } /* md:px-8 md:py-10 md:max-w-[300px] */
        }
        @media (min-width: 1024px) { /* lg */
            .plan-card { padding: 40px 36px; } /* lg:px-9 lg:py-11 */
        }
        @media (min-width: 1280px) { /* xl */
            .plan-card { padding: 48px 40px; } /* xl:px-10 xl:py-12 */
        }

        .plan-card:hover {
            transform: translateY(-4px); /* Slight lift */
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }

        /* Featured Plan (Business Plan) */
        .plan-card.featured {
            border-color: #4f52ff; /* border-[#4f52ff] */
            background-color: #f0f1ff; /* bg-[#f0f1ff] */
        }

        .most-popular-badge {
            position: absolute;
            top: -20px; /* increased from -12px */
            left: 50%;
            transform: translateX(-50%); /* -translate-x-1/2 */
            background-color: #4f52ff; /* bg-[#4f52ff] */
            color: #ffffff; /* text-white */
            font-size: 12px;
            font-weight: 700; /* font-semibold */
            border-top-left-radius: 4px; /* rounded-t */
            border-top-right-radius: 4px; /* rounded-t */
            padding: 6px 20px; /* px-4 py-1 */
            letter-spacing: 0.01em; /* tracking-wide */
            user-select: none; /* select-none */
            text-transform: uppercase; /* For MOST POPULAR text */
        }
        @media (min-width: 640px) { .most-popular-badge { font-size: 11px; padding: 4px 18px; } } /* sm */
        @media (min-width: 768px) { .most-popular-badge { font-size: 12px; padding: 5px 20px; } } /* md */


        .plan-header {
            margin-bottom: 20px; /* mb-3 increased */
        }
        .plan-header h3 {
            font-weight: 600; /* font-semibold */
            font-size: 13px;
            margin-bottom: 6px; /* mb-1 */
        }
        @media (min-width: 640px) { .plan-header h3 { font-size: 14px; } } /* sm */
        @media (min-width: 768px) { .plan-header h3 { font-size: 15px; } } /* md */
        @media (min-width: 1024px) { .plan-header h3 { font-size: 16px; } } /* lg */
        @media (min-width: 1280px) { .plan-header h3 { font-size: 17px; } } /* xl */

        .plan-header p {
            font-size: 14px;
            color: #6b6b8a; /* text-[#6b6b8a] */
            line-height: 1.4; /* leading-tight */
        }
        @media (min-width: 640px) { .plan-header p { font-size: 12px; } } /* sm */
        @media (min-width: 768px) { .plan-header p { font-size: 13px; } } /* md */
        @media (min-width: 1024px) { .plan-header p { font-size: 14px; } } /* lg */
        @media (min-width: 1280px) { .plan-header p { font-size: 15px; } } /* xl */

        /* Price Section */
        .price-section {
            margin-bottom: 24px; /* mb-4 increased */
        }
        .price-line {
            display: flex;
            align-items: center; /* items-center */
            gap: 8px; /* gap-1 increased */
            margin-bottom: 8px; /* mb-1 increased */
        }
        .original-price {
            text-decoration: line-through; /* line-through */
            font-size: 12px;
            color: #6b6b8a; /* text-[#6b6b8a] */
        }
        @media (min-width: 640px) { .original-price { font-size: 11px; } } /* sm */
        @media (min-width: 768px) { .original-price { font-size: 12px; } } /* md */

        .save-badge {
            background-color: #d7d9ff; /* bg-[#d7d9ff] */
            color: #4f52ff; /* text-[#4f52ff] */
            font-size: 10px;
            font-weight: 600; /* font-semibold */
            border-radius: 6px; /* rounded */
            padding: 3px 10px; /* px-1.5 py-[1px] increased */
        }
        @media (min-width: 640px) { .save-badge { font-size: 11px; padding: 4px 12px; } } /* sm */
        @media (min-width: 768px) { .save-badge { font-size: 12px; padding: 4px 14px; } } /* md */

        .current-price-display {
            display: flex;
            align-items: baseline; /* items-baseline */
            gap: 6px; /* gap-1 increased */
            font-weight: 600; /* font-semibold */
            color: #1a1a3d; /* text-[#1a1a3d] */
        }
        .current-price-value {
            font-size: 32px;
            line-height: 1; /* leading-none */
        }
        @media (min-width: 640px) { .current-price-value { font-size: 34px; } } /* sm */
        @media (min-width: 768px) { .current-price-value { font-size: 36px; } } /* md */
        @media (min-width: 1024px) { .current-price-value { font-size: 38px; } } /* lg */
        @media (min-width: 1280px) { .current-price-value { font-size: 40px; } } /* xl */

        .current-price-term {
            font-size: 14px;
            font-weight: normal; /* font-normal */
        }
        @media (min-width: 640px) { .current-price-term { font-size: 15px; } } /* sm */
        @media (min-width: 768px) { .current-price-term { font-size: 16px; } } /* md */
        @media (min-width: 1024px) { .current-price-term { font-size: 17px; } } /* lg */
        @media (min-width: 1280px) { .current-price-term { font-size: 18px; } } /* xl */

        .term-description {
            font-size: 11px;
            color: #6b6b8a; /* text-[#6b6b8a] */
            margin-top: 6px; /* mt-1 increased */
        }
        @media (min-width: 640px) { .term-description { font-size: 12px; } } /* sm */
        @media (min-width: 768px) { .term-description { font-size: 13px; } } /* md */

        .free-months-info {
            color: #4f52ff; /* text-[#4f52ff] */
            font-size: 11px;
            font-weight: 600; /* font-semibold */
            margin-top: 4px; /* mt-0.5 increased */
        }
        @media (min-width: 640px) { .free-months-info { font-size: 12px; } } /* sm */
        @media (min-width: 768px) { .free-months-info { font-size: 13px; } } /* md */

        /* Choose Plan Button */
        .choose-plan-btn {
            border: 1px solid #4f52ff; /* border border-[#4f52ff] */
            color: #4f52ff; /* text-[#4f52ff] */
            font-size: 13px;
            font-weight: 600; /* font-semibold */
            border-radius: 6px; /* rounded */
            padding: 10px 24px; /* px-5 py-1.5 increased */
            transition: background-color 0.2s, color 0.2s; /* transition-colors */
            width: 100%; /* w-full */
        }
        @media (min-width: 640px) { .choose-plan-btn { font-size: 14px; } } /* sm */
        @media (min-width: 768px) { .choose-plan-btn { font-size: 15px; } } /* md */

        .choose-plan-btn:hover {
            background-color: #4f52ff; /* hover:bg-[#4f52ff] */
            color: #ffffff; /* hover:text-white */
        }

        /* Featured button specific style */
        .plan-card.featured .choose-plan-btn {
            background-color: #4f52ff; /* bg-[#4f52ff] */
            color: #ffffff; /* text-white */
        }
        .plan-card.featured .choose-plan-btn:hover {
            background-color: #3a3edb; /* hover:bg-[#3a3edb] */
        }

        .renewal-info {
            font-size: 10px;
            color: #6b6b8a; /* text-[#6b6b8a] */
            margin-top: 12px; /* mt-2 increased */
            line-height: 1.25; /* leading-tight */
        }
        @media (min-width: 640px) { .renewal-info { font-size: 11px; } } /* sm */
        @media (min-width: 768px) { .renewal-info { font-size: 12px; } } /* md */

        /* Features List */
        .features-list {
            margin-top: 24px; /* mt-5 increased */
            margin-bottom: 0; /* Ensures it doesn't push the link down too much */
            padding-left: 0;
            list-style: none;
            flex: 1; /* flex-1 to push the link to the bottom */
            overflow: hidden; /* To handle expansion/collapse */
            max-height: 320px; /* Increased visible height for features */
            transition: max-height 0.5s ease-out; /* Smooth transition */
            will-change: max-height; /* Performance hint */
        }

        .features-list.expanded {
            max-height: 1500px; /* Large enough to show all content */
            transition: max-height 0.7s ease-in;
        }

        .features-list li {
            display: flex;
            align-items: center; /* items-center */
            gap: 6px; /* gap-1 increased */
            margin-bottom: 6px; /* space-y-1 equivalent is margin-bottom on li */
            font-size: 11px;
            color: #6b6b8a; /* text-[#6b6b8a] */
            line-height: 1.25; /* leading-tight */
        }
        @media (min-width: 640px) { .features-list li { font-size: 12px; } } /* sm */
        @media (min-width: 768px) { .features-list li { font-size: 13px; } } /* md */

        .features-list li .fas {
            color: #4f52ff; /* text-[#4f52ff] */
            font-size: 12px;
            flex-shrink: 0; /* Prevent icon from shrinking */
        }

        /* See All Features Link */
        .see-features-link {
            display: inline-flex; /* inline-flex */
            align-items: center; /* items-center */
            justify-content: center; /* justify-center */
            color: #4f52ff; /* text-[#4f52ff] */
            font-size: 11px;
            font-weight: 600; /* font-semibold */
            margin-top: 16px; /* mt-3 increased */
            width: 100%; /* Ensure it spans full width for centering */
            padding-top: 14px; /* Add some padding above the link for spacing */
            border-top: 1px solid #e6e6f0; /* Small separator line */
        }
        @media (min-width: 640px) { .see-features-link { font-size: 12px; } } /* sm */
        @media (min-width: 768px) { .see-features-link { font-size: 13px; } } /* md */

        .see-features-link:hover {
            text-decoration: underline;
        }

        .see-features-link .fas {
            font-size: 12px;
            margin-left: 8px; /* ml-1 increased */
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
               background: linear-gradient(135deg, #4A00E0 0%, #8E2DE2 100%);
            min-height: 100vh;
            overflow-x: hidden; /* Prevent horizontal scroll during animations */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* --- ADJUSTED HERO SECTION CSS STARTS HERE --- */
        .hero-section {
         padding-top: 40px;
             padding-bottom:55px; /*Increased top/bottom padding for more breathing room */
            background: linear-gradient(135deg, #4A00E0 0%, #8E2DE2 100%); /* Retained your vibrant gradient */
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInSlideUp 0.8s ease-out forwards;
            animation-delay: 0.1s;
        }

        .hero-section h1 {
            font-size: 3.2rem; /* Significantly larger for more presence on desktop */
            font-weight: 800;
            margin-bottom: 25px;
            line-height: 1.15; /* Tighter line-height for a stronger headline */
            text-shadow: 4px 4px 8px rgba(0,0,0,0.4); /* More pronounced shadow */
            max-width: 900px; /* Constrain width for readability on very wide screens */
            margin-left: auto;
            margin-right: auto;
        }

        .hero-section .subtitle {
            font-size: 1.8rem; /* Larger subtitle */
            margin-bottom: 40px; /* More space below subtitle */
            opacity: 0.95;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-section .value-props {
            display: flex;
            justify-content: center;
            gap: 30px; /* Space between value propositions */
            margin-bottom: 50px; /* More space above the button */
            flex-wrap: wrap; /* Allows wrapping on smaller screens */
            max-width: 900px; /* Align with h1's max-width */
            margin-left: auto;
            margin-right: auto;
        }

        .hero-section .value-props p {
            font-size: 1.3rem; /* Slightly larger text for value props */
            font-weight: 500;
            background: rgba(255, 255, 255, 0.2); /* Slightly more opaque for better contrast */
            padding: 12px 25px; /* Slightly more padding */
            border-radius: 8px; /* Slightly more rounded corners */
            backdrop-filter: blur(8px); /* Stronger frosty glass effect */
            display: flex;
            align-items: center;
            gap: 10px; /* More space between checkmark and text */
            box-shadow: 0 4px 10px rgba(0,0,0,0.1); /* Subtle shadow for depth */
        }
        /* No need for ::before content here, as the checkmark is directly in the HTML */

        .hero-cta-button {
            background: #FFD700; /* Bright gold color for the button */
            color: #2c3e50; /* Darker text for even better contrast */
            padding: 20px 45px; /* Larger button */
            border-radius: 12px; /* More rounded button */
            font-size: 1.4rem; /* Larger font on button */
            font-weight: 800; /* Bolder button text */
            text-transform: uppercase;
            letter-spacing: 2px; /* Increased letter spacing */
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0,0,0,0.3); /* More pronounced shadow */
        }

        .hero-cta-button:hover {
            transform: translateY(-5px) scale(1.03); /* More active hover effect */
            box-shadow: 0 15px 30px rgba(0,0,0,0.4);
            background: #FFEA00;
        }

        /* Media queries for responsiveness */
        @media (max-width: 1024px) {
            .hero-section h1 {
                font-size: 3.5rem;
            }
            .hero-section .subtitle {
                font-size: 1.5rem;
            }
            .hero-section .value-props p {
                font-size: 1.2rem;
                padding: 10px 20px;
            }
            .hero-cta-button {
                font-size: 1.25rem;
                padding: 18px 40px;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 15px; /* Adjusted padding for medium screens */
            }
            .hero-section h1 {
                font-size: 2.8rem;
                margin-bottom: 20px;
            }
            .hero-section .subtitle {
                font-size: 1.3rem;
                margin-bottom: 30px;
            }
            .hero-section .value-props {
                flex-direction: column; /* Stack value props vertically */
                gap: 15px;
            }
            .hero-section .value-props p {
                font-size: 1.1rem;
                padding: 10px 15px;
            }
            .hero-cta-button {
                font-size: 1.1rem;
                padding: 15px 30px;
            }
        }

        @media (max-width: 480px) {
            .hero-section {
                padding: 60px 10px; /* Tighter padding for small screens */
            }
            .hero-section h1 {
                font-size: 2.2rem;
            }
            .hero-section .subtitle {
                font-size: 1.05rem;
            }
            .hero-section .value-props {
                gap: 10px; display: flex;
          flex-direction: column;
          gap: 10px;
          max-width: 95%;
          margin: 0 auto 50px auto;
            }
            .hero-section .value-props p {
                font-size: 1rem;
                padding: 8px 12px;
                 font-weight: 500;
          
          border-radius: 10px;
          backdrop-filter: blur(10px);
          box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
          justify-content: flex-start;
          gap: 8px;
          background: rgba(255, 255, 255, 0.15);
            }
            .hero-cta-button {
                font-size: 1rem;
                padding: 12px 25px;
                letter-spacing: 1px;
            }
            .pricing-container h2 {
    font-size: 1.5rem; /* Adjust as needed for small screens */
            }
      .most-popular-badge {
    border-radius: 20px;
    display: inline-block;
    width: 60%; /* or max-width: 480px; depending on your design */
    text-align: center;
    /* Optional: adds background for visibility */
    padding: 5px 10px; /* Optional: adds spacing inside the badge */
    font-weight: bold;
   
}

   
  }

        
         @media (max-width: 450px) {
        .hero-section {
            padding: 40px 8px; /* Even tighter padding for very small screens */
        }
        .hero-section h1 {
            font-size: 2rem; /* Slightly smaller heading */
            margin-bottom: 20px;
        }
        .hero-section .subtitle {
            font-size: 1rem; /* Slightly smaller subtitle */
            margin-bottom: 25px;
        }
        .hero-section .value-props p {
            font-size: 0.9rem; /* Smaller text for value props */
            padding: 7px 10px;
        }
        .hero-cta-button {
            font-size: 0.95rem; /* Smaller button text */
            padding: 10px 20px;
        }
        .pricing-container h2 {
    font-size: 1.5rem; /* Adjust as needed for small screens */
    /* Optional: center on small devices */
  }

    }

        /* --- ADJUSTED HERO SECTION CSS ENDS HERE --- */


        .main-content {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            margin-bottom: 40px;
        }

        .features-section {
            margin-bottom: 50px;
            /* Animation */
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInSlideUp 0.8s ease-out forwards;
            animation-delay: 0.3s;
        }

        .features-section h2 {
            font-size: 2rem;
            color: #2d3748;
            margin-bottom: 30px;
            text-align: center;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            padding: 15px;
            background: #f7fafc;
            border-radius: 10px;
            border-left: 4px solid #667eea;
            /* Animation */
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInSlideUp 0.8s ease-out forwards;
        }
        .feature-item:nth-child(1) { animation-delay: 0.4s; }
        .feature-item:nth-child(2) { animation-delay: 0.5s; }
        .feature-item:nth-child(3) { animation-delay: 0.6s; }
        .feature-item:nth-child(4) { animation-delay: 0.7s; }
        .feature-item:nth-child(5) { animation-delay: 0.8s; }
        .feature-item:nth-child(6) { animation-delay: 0.9s; }
        .feature-item:nth-child(7) { animation-delay: 1.0s; }
        .feature-item:nth-child(8) { animation-delay: 1.1s; }


        .feature-item span {
            font-size: 1.5rem;
            margin-right: 15px;
        }

      

        .cta-button {
            width: 100%;
            padding: 15px 30px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }

        .offer-banner {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 40px;
            animation: pulse 2s infinite;
            /* Animation */
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInSlideUp 0.8s ease-out forwards, pulse 2s infinite;
            animation-delay: 1.8s; /* Adjusted delay */
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }

      .guarantee-section {
    background-color: #f9f9f9; /* Light gray background for a soft look */
    border-radius: 15px; /* Rounded corners for a modern feel */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    padding: 40px; /* Generous padding for whitespace */
    margin: 40px auto; /* Centered with margin */
    text-align: center; /* Centered text */
    max-width: 800px; /* Constrain width for readability */
    transition: transform 0.3s ease; /* Smooth hover effect */
}

.guarantee-section h3 {
    font-size: 2.5rem; /* Large heading for emphasis */
    font-weight: 700; /* Bold text */
    color: #333; /* Dark gray for contrast */
    margin-bottom: 20px; /* Space below the heading */
}

.guarantee-section p {
    font-size: 1.125rem; /* Readable body text */
    color: #555; /* Medium gray for text */
    line-height: 1.6; /* Improved line height for readability */
    margin-bottom: 30px; /* Space below the paragraph */
}

.guarantee-btn {
    background-color: #4f52ff; /* Primary button color */
    color: #fff; /* White text for contrast */
    padding: 12px 24px; /* Button padding */
    border: none; /* No border */
    border-radius: 8px; /* Rounded button */
    font-size: 1rem; /* Button text size */
    font-weight: 600; /* Bold button text */
    cursor: pointer; /* Pointer cursor on hover */
    transition: background-color 0.3s ease, transform 0.3s ease; /* Smooth transitions */
}

.guarantee-btn:hover {
    background-color: #3a3edb; /* Darker shade on hover */
    transform: translateY(-2px); /* Slight lift effect */
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .guarantee-section {
        padding: 30px; /* Adjust padding for smaller screens */
    }

    .guarantee-section h3 {
        font-size: 1.5rem; /* Smaller heading on mobile */
    }

    .guarantee-section p {
        font-size: 1rem; /* Smaller text on mobile */
    }
}
@media (max-width: 480px) {
    .guarantee-section {
        padding: 20px; /* Adjust padding for smaller screens */
    }

    .guarantee-section h3 {
        font-size: 1.5rem; /* Smaller heading on mobile */
        /* Prevent line breaks */
        /* Hide overflow text */
        text-overflow: ellipsis; /* Add ellipsis for overflow text */
    }

    .guarantee-section p {
        font-size: 0.9rem; /* Smaller text on mobile */
    }
}



        .faq-section {
            margin-top: 50px;
            /* Animation */
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInSlideUp 0.8s ease-out forwards;
            animation-delay: 2.2s; /* Adjusted delay */
        }

        .faq-section h2 {
            font-size: 2rem;
            color: #2d3748;
            margin-bottom: 30px;
            text-align: center;
        }

        .faq-item {
            background: #f7fafc;
            border-radius: 10px;
            margin-bottom: 20px;
            overflow: hidden;
            /* Animation */
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInSlideUp 0.6s ease-out forwards;
        }
        .faq-item:nth-child(1) { animation-delay: 2.3s; }
        .faq-item:nth-child(2) { animation-delay: 2.4s; }
        .faq-item:nth-child(3) { animation-delay: 2.5s; }
        .faq-item:nth-child(4) { animation-delay: 2.6s; }


        .faq-question {
            padding: 20px;
            background: #e2e8f0;
            cursor: pointer;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.3s ease;
        }

        .faq-question:hover {
            background: #cbd5e0;
        }

        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-answer.active {
            padding: 20px;
            max-height: 200px; /* Adjust as needed for content */
        }

        .faq-toggle {
            font-size: 1.5rem;
            transition: transform 0.3s ease;
        }

        .faq-toggle.active {
            transform: rotate(45deg);
        }

        /* Keyframes for animations */
        @keyframes fadeInSlideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        /* Keyframes for animations */
        @keyframes fadeInSlideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2rem;
            }

            .hero-section p {
                font-size: 1.1rem;
            }

            .main-content {
                padding: 20px;
            }

            .pricing-cards {
                grid-template-columns: 1fr;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .price {
                font-size: 2.5rem;
            }
        }



  
/* style.css */

.footer-bottom p {
    text-align: center;
    padding: 16px 0;
    color: #2e3032;
    font-size: 18px;
    border-top: 1px solid #e5e7eb;
    font-family:'Work Sans',sans-serif;; /* Your desired font */
}
.bulk-order-contact {
    text-align: center;
    margin: 40px auto;
    font-size: 1.2rem;
    color: #fff;
    background: linear-gradient(135deg, #4f46e5 0%, #8b5cf6 100%);
    padding: 20px;
    border-radius: 12px;
    max-width: 800px;
    box-shadow: 0 10px 25px rgba(79, 70, 229, 0.3);
    border: 1px solid rgba(255, 255, 255, 0.2);
    position: relative;
    overflow: hidden;
}

.bulk-order-contact .circle {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
}

.bulk-order-contact .top-right {
    top: -50px;
    right: -50px;
    width: 150px;
    height: 150px;
}

.bulk-order-contact .bottom-left {
    bottom: -30px;
    left: -30px;
    width: 100px;
    height: 100px;
}

.bulk-order-contact .content {
    position: relative;
    z-index: 2;
}

.bulk-order-contact h3 {
    margin: 0 0 15px 0;
    font-size: 1.5rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.bulk-order-contact .icon-circle {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, 0.2);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    font-size: 1.2rem;
}

.bulk-order-contact p {
    margin: 0;
    line-height: 1.6;
}

.whatsapp-btn {
    display: inline-block;
    margin-top: 15px;
    padding: 10px 25px;
    background: #fff;
    color: #4f46e5;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(255, 255, 255, 0.2);
}

.whatsapp-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(255, 255, 255, 0.3);
}
@media (max-width: 480px) {


    .bulk-order-contact h3 {
        font-size: 1.2rem;
        flex-direction: column;
        gap: 5px;
    }

    .bulk-order-contact .icon-circle {
        width: 35px;
        height: 35px;
        font-size: 1rem;
    }

    .whatsapp-btn {
        font-size: 0.95rem;
        padding: 8px 20px;
    }

    .bulk-order-contact .top-right,
    .bulk-order-contact .bottom-left {
        display: none; /* Hide decorative circles on small screens */
    }
}

   </style>
</head>
<body>
    <div class="container">
    <div class="hero-section">
    <h1>Unlock Your Career for Life with a Single Investment.</h1>
    <!-- <p class="subtitle">Never pay again for the skills you need to thrive in tech.</p> -->
    <div class="value-props">
        <p>✔️Invest Once, Transform Your Career for Life</p>
        <p>✔️Lifetime Access to All Benefits</p>
        <p>✔️No recurring fees.</p>
        <p>✔️No hidden costs. Just life-changing value.</p>
        <p>✔️Guaranteed Career Transformation.</p>
        <p>✔️The smartest investment you'll ever make for your tech career</p>

    </div>
    <button class="hero-cta-button" onclick="document.querySelector('.pricing-container').scrollIntoView({ behavior: 'smooth' });">
        Explore Our Plans
    </button>
</div>

        <div class="main-content">
            <div class="features-section">
                <h2>What's Included in Every Plan:</h2>
                <div class="features-grid">
                    <div class="feature-item">
                        <span>💻</span>
                        <div>Lifetime Access to All Industry-Relevant Courses</div>
                    </div>
                    <div class="feature-item">
                        <span>📚</span>
                        <div>Exclusive Career Articles & Learning Resources</div>
                    </div>
                    <div class="feature-item">
                        <span>🎓</span>
                        <div>Certifications after each course</div>
                    </div>
                    <div class="feature-item">
                        <span>🤝</span>
                        <div>Live & Offline Doubt Sessions with Mentors</div>
                    </div>
                    <div class="feature-item">
                        <span>💼</span>
                        <div>Job & Internship Eligibility with Our Hiring Network</div>
                    </div>
                    <div class="feature-item">
                        <span>🎟</span>
                        <div>Free Passes to All Online + Offline Events, Webinars & Workshops</div>
                    </div>
                    <div class="feature-item">
                        <span>👥</span>
                        <div>Real Community Access (Not Just a Telegram Group!)</div>
                    </div>
                    <div class="feature-item">
                        <span>📆</span>
                        <div>One-time Payment. No renewals. No upsells.</div>
                    </div>
                </div>
            </div>

            <div class="offer-banner">
                <h3>⏰ Limited Time Offer — Until June 30, 2025</h3>
                <p>No Subscriptions.</p>
                <p>No Renewals.</p>
                <p>Just a one-time fee.</p>
                <p>Prices will go back to original after the offer window closes.</p>
            </div>


<body class="bg-white font-sans text-[#1a1a3d]">
    <div class="pricing-container">
        <h2 class="main-heading">
🚀 Choose Your Career Launch Plan
</h2>
        <p class="subtitle">
            <!-- Get started in complete confidence. Our 30-day money-back guarantee means it’s risk-free. -->
        </p>

        <div class="plan-cards-wrapper">
            <div class="plan-card">
                <div class="plan-header">
                    <h3>💡 Basic Plan:</h3>
                    <p>Perfect for learners who want to upskill at their own pace.</p>
                </div>

                <div class="price-section">
                    <div class="price-line">
                        <span class="original-price"> ₹3500</span>
                        <span class="save-badge">
                            SAVE 58%
                        </span>
                    </div>
                    <div class="current-price-display">
                        <span class="current-price-value">₹1,499</span>
                        <span class="current-price-term"></span>
                    </div>
                    <p class="term-description">One-Time Payment</p>
                    <p class="free-months-info">   Start Now – Build Your Skills, At Your Speed<br>
[Continue & Pay ₹1499]</p>
                </div>

            <a href ="checkoutpage.html">    <button class="choose-plan-btn">
                    Choose plan
                </button></a>
                <p class="renewal-info">
                  
                </p>


                <ul class="features-list">
                    <li class="visible-feature"><i class="fas fa-check"></i> Lifetime Access for 1 User</li>
                    <li class="visible-feature"><i class="fas fa-check"></i> Includes All Courses & Certifications</li>
                    <li class="visible-feature"><i class="fas fa-check"></i> Eligible for Job/Internship Opportunities</li>
                    <li class="visible-feature"><i class="fas fa-check"></i> Personal Mentorship via Appointment</li>
                    <!-- <li class="visible-feature"><i class="fas fa-check"></i> Hostinger Website Builder</li>
                    <li class="hidden-feature"><i class="fas fa-check"></i> Free domain (US$ 8.99 value)</li>
                    <li class="hidden-feature"><i class="fas fa-check"></i> Free automatic website migration</li>
                    <li class="hidden-feature"><i class="fas fa-check"></i> 2 mailboxes per website - free for 1 year</li>
                    <li class="hidden-feature"><i class="fas fa-check"></i> Unlimited free SSL</li>
                    <li class="hidden-feature"><i class="fas fa-check"></i> Weekly backups</li>
                    <li class="hidden-feature"><i class="fas fa-check"></i> Starter WooCommerce</li>
                    <li class="hidden-feature"><i class="fas fa-check"></i> Free CDN</li>
                    <li class="hidden-feature"><i class="fas fa-check"></i> Dedicated IP address</li>
                    <li class="hidden-feature"><i class="fas fa-check"></i> Priority support</li> -->
                </ul>

                <a href="#" class="see-features-link">
                    See all features
                    <i class="fas fa-chevron-down ml-1 text-[8px]"></i>
                </a>
            </div>

            <div class="plan-card featured">
                <div class="most-popular-badge">
                    MOST POPULAR
                </div>

                <div class="plan-header">
                    <h3>🔥 Premium Plan</h3>
                    <p>Level up with more power and enhanced features.</p>
                </div>

                <div class="price-section">
                    <div class="price-line">
                        <span class="original-price">₹6500</span>
                        <span class="save-badge">
                            SAVE 70%
                        </span>
                    </div>
                    <div class="current-price-display">
                        <span class="current-price-value">₹1,999</span>
                        <span class="current-price-term"></span>
                    </div>
                    <p class="term-description">One-Time Payment</p>
                    <p class="free-months-info"> Start Now – Learn, Get Trained, and Crack Interviews<br>
        [Continue & Pay ₹1999]</p>
                </div>

              <a href="checkoutpage.html"> <button class="choose-plan-btn">
                    Choose plan
                </button></a> 
                <!-- <p class="renewal-info">
                    Renews at US$ 18.99/mo for a year. Cancel anytime.
                </p> -->



                <ul class="features-list">
                    <li class="visible-feature"><i class="fas fa-check"></i>Everything in Career Starter Pack</li>
                    <li class="visible-feature"><i class="fas fa-check"></i>  Mock Interviews (Online + Offline)</li>
                    <li class="visible-feature"><i class="fas fa-check"></i> HR & Technical Rounds Training</li>
                    <li class="visible-feature"><i class="fas fa-check"></i>Personalized Feedback</li>
                    <li class="visible-feature"><i class="fas fa-check"></i> Soft Skills Coaching</li>
                    <li class="visible-feature"><i class="fas fa-check"></i> Placement Readiness Review</li> 
                    

            <li class="hidden-feature"><i class="fas fa-check"></i> Confidence-Building Practice Sessions</li>
                    <li class="hidden-feature"><i class="fas fa-check"></i> Free automatic website migration</li>


                    <!-- <li class="hidden-feature"><i class="fas fa-check"></i> 5 mailboxes per website - free for 1 year</li>
                    <li class="hidden-feature"><i class="fas fa-check"></i> Unlimited free SSL</li>
                    <li class="hidden-feature"><i class="fas fa-check"></i> Daily backups (US$ 25.00 value)</li>
                    <li class="hidden-feature"><i class="fas fa-check"></i> Basic WooCommerce</li>
                    <li class="hidden-feature"><i class="fas fa-check"></i> Free CDN</li>
                    <li class="hidden-feature"><i class="fas fa-check"></i> Dedicated IP address</li>
                    <li class="hidden-feature"><i class="fas fa-check"></i> Priority support</li> --> 
                </ul>

                <a href="#" class="see-features-link">
                    See all features
                    <i class="fas fa-chevron-down ml-1 text-[8px]"></i>
                </a>
            </div>

          
        
    </div>
 <div class="bulk-order-contact">
    <div class="circle top-right"></div>
    <div class="circle bottom-left"></div>

    <div class="content">
        <h3>
            <span class="icon-circle">
                <i class="fas fa-users"></i>
            </span>
            Special Bulk Order Rates
        </h3>

        <p>
            NGOs, Colleges, Schools, and Organizations get exclusive discounts on bulk orders.<br>
            Contact us at <strong>WhatsApp +91 6385854811</strong> for customized packages.
        </p>

        <a href="https://wa.me/916385854811" class="whatsapp-btn">
            <i class="fab fa-whatsapp"></i> Contact Now
        </a>
    </div>
</div>

            <div class="guarantee-section">
                <h3>💯 Risk-Free Learning Guarantee</h3>
                <p>If you complete the courses, attend your sessions, and still feel you haven't gained value — we'll personally support you through offline sessions in our Coimbatore Office</p>
            </div>

            <div class="faq-section">
                <h2>Frequently Asked Questions</h2>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <span>1. Is ₹1499 or ₹1999 a monthly fee?</span>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>No! Both are one-time payments. You'll get lifetime access to all current and future exclusive career articles, learning resources and courses, mentorship, certifications, and community benefits. No hidden charges, no renewals—ever.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <span>2. What's the difference between ₹1499 and ₹1999 plans?</span>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Both plans include lifetime course access, events, and job/internship eligibility. The ₹1999 Career Pro plan includes full interview training, mock interviews, resume help, and confidence coaching—perfect for serious job seekers.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <span>3. Are these courses beginner-friendly?</span>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yes. You don't need any prior coding or tech experience. Every course is taught in a simplified, practical way—perfect for absolute beginners, college students, and career switchers.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <span>4. Do I really get job support?</span>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Absolutely. We offer mock interviews, resume reviews, and job alerts from our network. Many of our students have cracked jobs at companies like Zoho, Dell, Wells Fargo, and more within just 2–3 months of joining.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

  <!-- Footer Start -->
<footer style="background-color: #f8f9fa; padding: 40px 20px; border-top: 1px solid #e5e7eb;">
    <div class="container" role="contentinfo" style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px;">
        <section aria-labelledby="footer-about">
            <h4 id="footer-about" style="font-size: 24px; font-weight: 700; color: #111827; margin-bottom: 16px;">About Us</h4>
            <p style="color: #6b728a; font-size: 16px; line-height: 1.5;">
                Empowering your career journey with lifetime access to premium tech courses, expert mentorship, and vibrant community support.
            </p>
        </section>

        <nav aria-labelledby="footer-links">
            <h4 id="footer-links" style="font-size: 24px; font-weight: 700; color: #111827; margin-bottom: 16px;">Quick Links</h4>
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li style="margin-bottom: 12px;"><a href="#" style="color: #4f46e5; text-decoration: none; transition: color 0.3s;">Privacy Policy</a></li>
                <li style="margin-bottom: 12px;"><a href="#" style="color: #4f46e5; text-decoration: none; transition: color 0.3s;">Terms of Service</a></li>
                <li style="margin-bottom: 12px;"><a href="#" style="color: #4f46e5; text-decoration: none; transition: color 0.3s;">Contact Us</a></li>
                <li style="margin-bottom: 12px;"><a href="#" style="color: #4f46e5; text-decoration: none; transition: color 0.3s;">FAQs</a></li>
                
            </ul>
        </nav>

        <section aria-labelledby="footer-social">
            <h4 id="footer-social" style="font-size: 24px; font-weight: 700; color: #111827; margin-bottom: 16px;">Follow Us</h4>
           <div class="social-links" style="display: flex; gap: 20px;">
             <a href="https://www.linkedin.com/company/gowthamrajnetwork/" aria-label="LinkedIn" style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; background-color: #e2e8f0; color: #4f46e5; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#4f46e5'; this.style.color='white';" onmouseout="this.style.backgroundColor='#e2e8f0'; this.style.color='#4f46e5';">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" width="20" height="20"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
    </a>
    <a href="https://www.instagram.com/gowthamraj_network/" aria-label="Instagram" style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; background-color: #e2e8f0; color: #4f46e5; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#4f46e5'; this.style.color='white';" onmouseout="this.style.backgroundColor='#e2e8f0'; this.style.color='#4f46e5';">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
    </a>
    <a href="https://www.facebook.com/gowthamrajnetwork" aria-label="Facebook" style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; background-color: #e2e8f0; color: #4f46e5; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#4f46e5'; this.style.color='white';" onmouseout="this.style.backgroundColor='#e2e8f0'; this.style.color='#4f46e5';">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" width="20" height="20"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
    </a>
    <a href="https://www.youtube.com/@GOWTHAMRAJNETWORK" aria-label="Youtube" style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; background-color: #e2e8f0; color: #4f46e5; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#4f46e5'; this.style.color='white';" onmouseout="this.style.backgroundColor='#e2e8f0'; this.style.color='#4f46e5';">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-1.94C18.84 4 12 4 12 4s-6.84 0-8.6.48a2.78 2.78 0 0 0-1.94 1.94C2 8.16 2 12 2 12s0 3.84.46 5.58a2.78 2.78 0 0 0 1.94 1.94c1.76.48 8.6.48 8.6.48s6.84 0 8.6-.48a2.78 2.78 0 0 0 1.94-1.94c.46-1.74.46-5.58.46-5.58s0-3.84-.46-5.58z"></path><polygon points="10 15 15 12 10 9 10 15"></polygon></svg>
    </a>
   
   
</div>
        </section>
    </div>


 <div class="footer-bottom" role="contentinfo">
    <p>&copy; 2025 GOWTHAM RAJ NETWORK. All Rights Reserved.</p> 
 </div>

 
 

</footer>

<!-- Footer End -->


<script>
        function toggleFAQ(element) {
            const answer = element.nextElementSibling;
            const toggle = element.querySelector('.faq-toggle');
            
            // Close all other FAQs
            document.querySelectorAll('.faq-answer').forEach(item => {
                if (item !== answer) {
                    item.classList.remove('active');
                }
            });
            
            document.querySelectorAll('.faq-toggle').forEach(item => {
                if (item !== toggle) {
                    item.classList.remove('active');
                    item.textContent = '+';
                }
            });
            
            // Toggle current FAQ
            answer.classList.toggle('active');
            toggle.classList.toggle('active');
            toggle.textContent = toggle.classList.contains('active') ? '×' : '+';
        }

        function proceedToPayment(plan, amount) {
            // Store selected plan details
            localStorage.setItem('selectedPlan', JSON.stringify({
                plan: plan,
                amount: amount,
                planName: plan === 'basic' ? 'Career Starter Pack' : 'Career Pro Pack + Interview Mastery'
            }));
            
            // Show confirmation
            if (confirm(`Proceed to payment for ${plan === 'basic' ? 'Basic' : 'Premium'} Plan (₹${amount})?`)) {
                // Here you would typically redirect to payment gateway
                // For demo purposes, we'll show an alert
                alert(`Redirecting to payment gateway for ₹${amount}...`);
                
                // In a real implementation, you would redirect to:
                // - Razorpay
                // - Stripe
                // - PayPal
                // - Or your preferred payment gateway
                
                // Example redirect (uncomment and modify as needed):
                // window.location.href = `/payment?plan=${plan}&amount=${amount}`;
            }
        }

        // Add smooth scrolling for better UX
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add loading animation for buttons
        document.querySelectorAll('.cta-button').forEach(button => {
            button.addEventListener('click', function() {
                const originalText = this.innerHTML;
                this.innerHTML = 'Processing...';
                this.disabled = true;
                
                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.disabled = false;
                }, 2000);
            });
        });
   document.addEventListener('DOMContentLoaded', () => {
            const seeFeaturesLinks = document.querySelectorAll('.see-features-link');

            seeFeaturesLinks.forEach(link => {
                const featuresList = link.previousElementSibling; // The ul.features-list
                const hiddenFeatures = featuresList.querySelectorAll('.hidden-feature');
                const chevronIcon = link.querySelector('.fas');

                // Initially hide the 'hidden-feature' items
                hiddenFeatures.forEach(item => {
                    item.style.display = 'none';
                });

                // Set initial max-height for collapse effect on the ul itself
                // Calculate initial height based on visible features
                let initialVisibleHeight = 0;
                featuresList.querySelectorAll('.visible-feature').forEach(item => {
                    initialVisibleHeight += item.offsetHeight + parseFloat(getComputedStyle(item).marginBottom);
                });
                featuresList.style.maxHeight = initialVisibleHeight + 'px';


                link.addEventListener('click', (e) => {
                    e.preventDefault();

                    if (featuresList.classList.contains('expanded')) {
                        // Collapse
                        featuresList.classList.remove('expanded');
                        link.innerHTML = 'See all features <i class="fas fa-chevron-down"></i>';
                        chevronIcon.classList.remove('fa-chevron-up');
                        chevronIcon.classList.add('fa-chevron-down');

                        hiddenFeatures.forEach(item => {
                             item.style.display = 'none'; // Instantly hide for transition to work
                        });
                        featuresList.style.maxHeight = initialVisibleHeight + 'px';

                    } else {
                        // Expand
                        featuresList.classList.add('expanded');
                        link.innerHTML = 'Hide features <i class="fas fa-chevron-up"></i>';
                        chevronIcon.classList.remove('fa-chevron-down');
                        chevronIcon.classList.add('fa-chevron-up');

                        hiddenFeatures.forEach(item => {
                            item.style.display = 'flex'; // Show hidden features for accurate scrollHeight calculation
                        });
                        // Set max-height to scrollHeight to animate to full height
                        featuresList.style.maxHeight = featuresList.scrollHeight + 'px';
                    }
                });
            });
        });
</script>
</body>
</html>

