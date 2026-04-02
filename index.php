<?php
// PHP logic can go here
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shaik Rafi | Premium Software Developer</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    colors: {
                        lightbg: '#ffffff', // Absolute clear white
                        textmain: '#0f172a', // Deep slate for high contrast
                        textmuted: '#475569', // Muted slate
                        accent1: '#f472b6', // Pink 400
                        accent2: '#fb7185', // Rose 400
                        accent3: '#fbcfe8', // Pink 200 (Soft bubble)
                    },
                    animation: {
                        'blob': 'blob 10s infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(40px, -60px) scale(1.1)' },
                            '66%': { transform: 'translate(-30px, 30px) scale(0.95)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-15px)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body { 
            background-color: #ffffff; /* Clear White Background */
            color: #0f172a; 
            overflow-x: hidden;
        }
        
        /* Premium Light Glassmorphism */
        .glass-premium { 
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(24px); 
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(244, 114, 182, 0.15); 
            box-shadow: 0 10px 40px -10px rgba(244, 114, 182, 0.1); 
        }

        /* 3D Glowing Text for Light Mode */
        .text-glow {
            text-shadow: 0 4px 15px rgba(244, 114, 182, 0.2);
        }

        /* Gradient Text */
        .bg-clip-text {
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .gradient-primary {
            background-image: linear-gradient(135deg, #f472b6 0%, #fb7185 100%);
        }

        /* Animated 3D Light Pink Bubbles */
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(70px);
            z-index: -1;
            opacity: 0.5;
        }
        .orb-1 { top: -5%; left: -10%; width: 500px; height: 500px; background: #fbcfe8; animation-delay: 0s; }
        .orb-2 { top: 40%; right: -5%; width: 450px; height: 450px; background: #fce7f3; animation-delay: 2s; }
        .orb-3 { bottom: -10%; left: 15%; width: 600px; height: 600px; background: #ffe4e6; animation-delay: 4s; }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #ffffff; }
        ::-webkit-scrollbar-thumb { background: #fbcfe8; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #f472b6; }
    </style>
</head>
<body class="antialiased selection:bg-accent1 selection:text-white relative">

    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="orb orb-1 animate-blob"></div>
        <div class="orb orb-2 animate-blob"></div>
        <div class="orb orb-3 animate-blob"></div>
    </div>

    <nav class="fixed w-full z-50 glass-premium transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-display font-black tracking-wider gradient-primary bg-clip-text">SR.</a>
            <div class="hidden md:flex space-x-8 text-sm font-semibold text-textmuted">
                <a href="#about" class="hover:text-accent1 transition-all duration-300">About</a>
                <a href="#skills" class="hover:text-accent1 transition-all duration-300">Skills</a>
                <a href="#projects" class="hover:text-accent1 transition-all duration-300">Projects</a>
                <a href="#contact" class="hover:text-accent1 transition-all duration-300">Contact</a>
            </div>
            <a href="#contact" class="hidden md:block px-6 py-2.5 rounded-full bg-textmain text-white hover:bg-accent1 hover:shadow-lg hover:shadow-accent1/30 transition-all duration-300 text-sm font-semibold">Let's Talk</a>
        </div>
    </nav>

    <section id="home" class="min-h-screen flex items-center pt-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center w-full z-10">
            <div class="space-y-8 order-2 lg:order-1 text-center lg:text-left" data-aos="fade-right" data-aos-duration="1000">
                <div class="inline-block px-5 py-2 rounded-full glass-premium border-accent1/20 text-accent1 text-sm font-bold shadow-sm mb-2">
                    <i class="fas fa-sparkles mr-2 text-accent2"></i> Aspiring Software Developer
                </div>
                <h1 class="text-5xl md:text-7xl font-display font-black text-textmain leading-tight text-glow">
                    Hi, I'm <br />
                    <span class="gradient-primary bg-clip-text">Shaik Rafi.</span>
                </h1>
                <p class="text-lg md:text-xl text-textmuted max-w-xl mx-auto lg:mx-0 font-medium leading-relaxed">
                    Passionate about building intelligent applications and scalable web solutions that live on the bleeding edge of technology.
                </p>
                
                <div class="flex gap-4 justify-center lg:justify-start pt-4">
                    <a href="#projects" class="px-8 py-4 bg-gradient-to-r from-accent1 to-accent2 text-white hover:scale-105 font-bold rounded-2xl transition-all duration-300 shadow-[0_10px_20px_rgba(244,114,182,0.3)]">
                        Explore My Work
                    </a>
                    <a href="#contact" class="px-8 py-4 glass-premium text-textmain hover:bg-gray-50 font-bold rounded-2xl transition-all duration-300">
                        Contact Me
                    </a>
                </div>
            </div>
            
            <div class="order-1 lg:order-2 flex justify-center items-center" data-aos="zoom-in" data-aos-duration="1200">
                <div class="relative w-72 h-72 md:w-96 md:h-96 animate-float" data-tilt data-tilt-max="8" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.2">
                    <div class="absolute inset-0 bg-gradient-to-tr from-accent1 to-accent3 rounded-[2.5rem] blur-2xl opacity-50 transform rotate-6"></div>
                    <div class="relative w-full h-full rounded-[2.5rem] border-4 border-white p-2 glass-premium overflow-hidden shadow-2xl bg-white">
                        <img src="assets/css/js/images/profile.png" alt="Shaik Rafi"> alt="Shaik Rafi" alt="Shaik Rafi" class="object-cover w-full h-full rounded-3xl scale-105 hover:scale-100 transition-transform duration-700">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-32 relative z-10">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-12 flex items-center text-textmain" data-aos="fade-up">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent1 to-accent2 mr-4 text-2xl">01.</span> About Me
                <div class="h-[2px] bg-accent3/50 flex-grow ml-6 rounded-full"></div>
            </h2>
            <div class="glass-premium p-10 md:p-14 rounded-[2.5rem] text-textmuted font-medium text-lg leading-relaxed space-y-6 relative overflow-hidden" data-aos="fade-up" data-aos-delay="200" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                <div class="absolute -right-10 -top-10 text-9xl text-accent1/5"><i class="fas fa-fingerprint"></i></div>
                <p class="relative z-10">
                    Hello! I'm <span class="text-textmain font-bold">Shaik Rafi</span>, an ambitious Computer Science Engineering student specializing in <span class="text-accent1 font-bold">Artificial Intelligence & Machine Learning</span> at <strong>PP Savani University</strong>.
                </p>
                <p class="relative z-10">
                    I have a deep-rooted interest in software development and crafting intelligent systems that solve complex problems. My academic journey has allowed me to build a strong foundation in <span class="text-accent2 font-bold">Data Structures & Algorithms</span>, which acts as the backbone of my problem-solving approach.
                </p>
                <p class="relative z-10">
                    Whether I'm writing robust backend logic, developing web applications, or training machine learning models, I enjoy the challenge of turning ideas into functional, real-world academic and personal projects.
                </p>
            </div>
        </div>
    </section>

    <section id="skills" class="py-32 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-16 flex items-center text-textmain" data-aos="fade-up">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent1 to-accent2 mr-4 text-2xl">02.</span> Technical Arsenal
                <div class="h-[2px] bg-accent3/50 flex-grow ml-6 rounded-full"></div>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="glass-premium p-8 rounded-3xl border-t-4 border-t-accent1 relative overflow-hidden group" data-aos="fade-up" data-aos-delay="100" data-tilt data-tilt-max="4">
                    <div class="w-14 h-14 rounded-2xl bg-accent3/50 flex items-center justify-center mb-6 text-accent1 group-hover:scale-110 transition-transform">
                        <i class="fas fa-code text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-5 text-textmain">Programming</h3>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-textmuted shadow-sm border border-gray-100">Python</span>
                        <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-textmuted shadow-sm border border-gray-100">Java (DSA)</span>
                    </div>
                </div>

                <div class="glass-premium p-8 rounded-3xl border-t-4 border-t-accent2 relative overflow-hidden group" data-aos="fade-up" data-aos-delay="200" data-tilt data-tilt-max="4">
                    <div class="w-14 h-14 rounded-2xl bg-rose-100 flex items-center justify-center mb-6 text-accent2 group-hover:scale-110 transition-transform">
                        <i class="fas fa-brain text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-5 text-textmain">AI & ML</h3>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-textmuted shadow-sm border border-gray-100">Machine Learning</span>
                        <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-textmuted shadow-sm border border-gray-100">AI Agents</span>
                    </div>
                </div>

                <div class="glass-premium p-8 rounded-3xl border-t-4 border-t-pink-300 relative overflow-hidden group" data-aos="fade-up" data-aos-delay="300" data-tilt data-tilt-max="4">
                    <div class="w-14 h-14 rounded-2xl bg-pink-100 flex items-center justify-center mb-6 text-pink-400 group-hover:scale-110 transition-transform">
                        <i class="fas fa-globe text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-5 text-textmain">Web</h3>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-textmuted shadow-sm border border-gray-100">HTML/CSS</span>
                        <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-textmuted shadow-sm border border-gray-100">JavaScript</span>
                        <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-textmuted shadow-sm border border-gray-100">PHP</span>
                    </div>
                </div>

                <div class="glass-premium p-8 rounded-3xl border-t-4 border-t-purple-400 relative overflow-hidden group" data-aos="fade-up" data-aos-delay="400" data-tilt data-tilt-max="4">
                    <div class="w-14 h-14 rounded-2xl bg-purple-100 flex items-center justify-center mb-6 text-purple-500 group-hover:scale-110 transition-transform">
                        <i class="fas fa-server text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-5 text-textmain">Backend</h3>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-textmuted shadow-sm border border-gray-100">Spring Boot</span>
                    </div>
                </div>

                <div class="glass-premium p-8 rounded-3xl border-t-4 border-t-orange-400 relative overflow-hidden group lg:col-span-2" data-aos="fade-up" data-aos-delay="500" data-tilt data-tilt-max="4">
                    <div class="w-14 h-14 rounded-2xl bg-orange-100 flex items-center justify-center mb-6 text-orange-500 group-hover:scale-110 transition-transform">
                        <i class="fas fa-database text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-5 text-textmain">Database</h3>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-textmuted shadow-sm border border-gray-100">MySQL</span>
                        <span class="px-4 py-2 bg-white rounded-lg text-sm font-bold text-textmuted shadow-sm border border-gray-100">SQL</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-32 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-16 flex items-center text-textmain" data-aos="fade-up">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent1 to-accent2 mr-4 text-2xl">03.</span> Featured Projects
                <div class="h-[2px] bg-accent3/50 flex-grow ml-6 rounded-full"></div>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div class="glass-premium rounded-[2rem] p-8 flex flex-col h-full group relative overflow-hidden bg-white/70" data-aos="fade-up" data-aos-delay="100" data-tilt data-tilt-max="3" data-tilt-glare data-tilt-max-glare="0.2">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-accent3 rounded-full blur-3xl -mr-10 -mt-10 transition-transform group-hover:scale-150 duration-700 opacity-60"></div>
                    <div class="flex justify-between items-center mb-6 relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center shadow-sm text-accent1">
                            <i class="far fa-folder-open text-xl"></i>
                        </div>
                        <a href="https://github.com/rafi9505" target="_blank" class="text-gray-400 hover:text-accent1 transition-colors p-2">
                            <i class="fab fa-github text-2xl"></i>
                        </a>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-textmain mb-3 relative z-10 group-hover:text-accent1 transition-colors">Campus Delivery</h3>
                    <p class="text-textmuted mb-6 flex-grow font-medium text-sm leading-relaxed relative z-10">
                        A web application to streamline on-campus delivery logistics, ensuring efficient coordination between students and delivery personnel.
                    </p>
                    <div class="flex flex-wrap gap-2 font-display font-bold text-[11px] text-accent1 relative z-10 mt-auto tracking-wide">
                        <span class="bg-accent3/40 px-3 py-1.5 rounded-md">PHP</span> 
                        <span class="bg-accent3/40 px-3 py-1.5 rounded-md">MySQL</span>
                    </div>
                </div>

                <div class="glass-premium rounded-[2rem] p-8 flex flex-col h-full group relative overflow-hidden bg-white/70" data-aos="fade-up" data-aos-delay="200" data-tilt data-tilt-max="3" data-tilt-glare data-tilt-max-glare="0.2">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-accent2/30 rounded-full blur-3xl -mr-10 -mt-10 transition-transform group-hover:scale-150 duration-700 opacity-60"></div>
                    <div class="flex justify-between items-center mb-6 relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center shadow-sm text-accent2">
                            <i class="far fa-folder-open text-xl"></i>
                        </div>
                        <a href="https://github.com/rafi9505" target="_blank" class="text-gray-400 hover:text-accent2 transition-colors p-2">
                            <i class="fab fa-github text-2xl"></i>
                        </a>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-textmain mb-3 relative z-10 group-hover:text-accent2 transition-colors">Smart Fashion Stylist</h3>
                    <p class="text-textmuted mb-6 flex-grow font-medium text-sm leading-relaxed relative z-10">
                        An intelligent AI-driven app analyzing user preferences and current trends to provide personalized outfit recommendations.
                    </p>
                    <div class="flex flex-wrap gap-2 font-display font-bold text-[11px] text-accent2 relative z-10 mt-auto tracking-wide">
                        <span class="bg-rose-100 px-3 py-1.5 rounded-md">Python</span> 
                        <span class="bg-rose-100 px-3 py-1.5 rounded-md">AI / ML</span>
                    </div>
                </div>

                <div class="glass-premium rounded-[2rem] p-8 flex flex-col h-full group relative overflow-hidden bg-white/70" data-aos="fade-up" data-aos-delay="300" data-tilt data-tilt-max="3" data-tilt-glare data-tilt-max-glare="0.2">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-purple-200 rounded-full blur-3xl -mr-10 -mt-10 transition-transform group-hover:scale-150 duration-700 opacity-60"></div>
                    <div class="flex justify-between items-center mb-6 relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center shadow-sm text-purple-500">
                            <i class="far fa-folder-open text-xl"></i>
                        </div>
                        <a href="https://github.com/rafi9505" target="_blank" class="text-gray-400 hover:text-purple-500 transition-colors p-2">
                            <i class="fab fa-github text-2xl"></i>
                        </a>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-textmain mb-3 relative z-10 group-hover:text-purple-500 transition-colors">Smart Visitor Entry</h3>
                    <p class="text-textmuted mb-6 flex-grow font-medium text-sm leading-relaxed relative z-10">
                        A digital solution for managing, tracking, and securing visitor logs efficiently for modern campuses and institutions.
                    </p>
                    <div class="flex flex-wrap gap-2 font-display font-bold text-[11px] text-purple-600 relative z-10 mt-auto tracking-wide">
                        <span class="bg-purple-100 px-3 py-1.5 rounded-md">Web Tech</span> 
                        <span class="bg-purple-100 px-3 py-1.5 rounded-md">Database</span>
                    </div>
                </div>

                <div class="glass-premium rounded-[2rem] p-8 flex flex-col h-full group relative overflow-hidden bg-white/70" data-aos="fade-up" data-aos-delay="400" data-tilt data-tilt-max="3" data-tilt-glare data-tilt-max-glare="0.2">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-sky-200 rounded-full blur-3xl -mr-10 -mt-10 transition-transform group-hover:scale-150 duration-700 opacity-60"></div>
                    <div class="flex justify-between items-center mb-6 relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center shadow-sm text-sky-500">
                            <i class="far fa-folder-open text-xl"></i>
                        </div>
                        <a href="https://github.com/rafi9505" target="_blank" class="text-gray-400 hover:text-sky-500 transition-colors p-2">
                            <i class="fab fa-github text-2xl"></i>
                        </a>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-textmain mb-3 relative z-10 group-hover:text-sky-500 transition-colors">Studio Clicks</h3>
                    <p class="text-textmuted mb-6 flex-grow font-medium text-sm leading-relaxed relative z-10">
                        A professional photography and studio management platform to showcase high-quality galleries and handle client bookings.
                    </p>
                    <div class="flex flex-wrap gap-2 font-display font-bold text-[11px] text-sky-600 relative z-10 mt-auto tracking-wide">
                        <span class="bg-sky-100 px-3 py-1.5 rounded-md">HTML/CSS</span> 
                        <span class="bg-sky-100 px-3 py-1.5 rounded-md">JavaScript</span>
                    </div>
                </div>

                <div class="glass-premium rounded-[2rem] p-8 flex flex-col h-full group relative overflow-hidden bg-white/70" data-aos="fade-up" data-aos-delay="500" data-tilt data-tilt-max="3" data-tilt-glare data-tilt-max-glare="0.2">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-orange-200 rounded-full blur-3xl -mr-10 -mt-10 transition-transform group-hover:scale-150 duration-700 opacity-60"></div>
                    <div class="flex justify-between items-center mb-6 relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center shadow-sm text-orange-500">
                            <i class="far fa-folder-open text-xl"></i>
                        </div>
                        <a href="https://github.com/rafi9505" target="_blank" class="text-gray-400 hover:text-orange-500 transition-colors p-2">
                            <i class="fab fa-github text-2xl"></i>
                        </a>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-textmain mb-3 relative z-10 group-hover:text-orange-500 transition-colors">Admin Dashboard</h3>
                    <p class="text-textmuted mb-6 flex-grow font-medium text-sm leading-relaxed relative z-10">
                        A robust, interactive administrative dashboard built for data visualization, analytics monitoring, and user management.
                    </p>
                    <div class="flex flex-wrap gap-2 font-display font-bold text-[11px] text-orange-600 relative z-10 mt-auto tracking-wide">
                        <span class="bg-orange-100 px-3 py-1.5 rounded-md">Frontend</span> 
                        <span class="bg-orange-100 px-3 py-1.5 rounded-md">Charts JS</span>
                    </div>
                </div>

                <div class="glass-premium rounded-[2rem] p-8 flex flex-col h-full group relative overflow-hidden bg-white/70" data-aos="fade-up" data-aos-delay="600" data-tilt data-tilt-max="3" data-tilt-glare data-tilt-max-glare="0.2">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-200 rounded-full blur-3xl -mr-10 -mt-10 transition-transform group-hover:scale-150 duration-700 opacity-60"></div>
                    <div class="flex justify-between items-center mb-6 relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center shadow-sm text-emerald-500">
                            <i class="far fa-folder-open text-xl"></i>
                        </div>
                        <a href="https://github.com/rafi9505" target="_blank" class="text-gray-400 hover:text-emerald-500 transition-colors p-2">
                            <i class="fab fa-github text-2xl"></i>
                        </a>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-textmain mb-3 relative z-10 group-hover:text-emerald-500 transition-colors">E-Commerce Platform</h3>
                    <p class="text-textmuted mb-6 flex-grow font-medium text-sm leading-relaxed relative z-10">
                        A fully functional online store interface featuring product catalogs, cart functionalities, and a modern shopping experience.
                    </p>
                    <div class="flex flex-wrap gap-2 font-display font-bold text-[11px] text-emerald-600 relative z-10 mt-auto tracking-wide">
                        <span class="bg-emerald-100 px-3 py-1.5 rounded-md">Full Stack</span> 
                        <span class="bg-emerald-100 px-3 py-1.5 rounded-md">UI/UX</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 relative z-10" data-aos="zoom-in">
        <div class="max-w-4xl mx-auto px-6 text-center glass-premium p-12 md:p-20 rounded-[3rem] relative overflow-hidden bg-white/90">
            <div class="absolute inset-0 bg-gradient-to-b from-accent3/20 to-transparent"></div>
            <h2 class="text-4xl md:text-5xl font-display font-black text-textmain mb-6 relative z-10">Level Up Your Team.</h2>
            <p class="text-textmuted mb-10 text-lg md:text-xl font-medium relative z-10 max-w-2xl mx-auto">
                Download my resume to see a detailed overview of my education, technical skills, and project history.
            </p>
            <a href="#" download class="relative z-10 inline-flex items-center px-10 py-5 bg-textmain text-white hover:bg-accent1 hover:-translate-y-1 font-bold rounded-2xl transition-all duration-300 shadow-[0_10px_30px_rgba(15,23,42,0.2)] hover:shadow-[0_10px_30px_rgba(244,114,182,0.4)]">
                <i class="fas fa-file-pdf mr-3 text-xl"></i> Grab My Resume
            </a>
        </div>
    </section>

    <section id="contact" class="py-32 relative z-10 text-center">
        <div class="max-w-3xl mx-auto px-6">
            <p class="text-accent1 font-display font-bold mb-4 text-sm tracking-widest uppercase" data-aos="fade-up">04. What's Next?</p>
            <h2 class="text-5xl md:text-7xl font-display font-black text-textmain mb-8" data-aos="fade-up" data-aos-delay="100">Get In Touch</h2>
            <p class="text-textmuted mb-12 text-lg md:text-xl font-medium leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                I'm currently looking for new opportunities and collaborations. Whether you have a question, a project idea, or just want to say hi, my inbox is always open!
            </p>
            
            <div data-aos="fade-up" data-aos-delay="300">
                <a href="mailto:23se02ml149@ppsu.ac.in" class="inline-block px-12 py-5 bg-gradient-to-r from-accent1 to-accent2 text-white font-bold rounded-2xl transition-all duration-300 shadow-[0_10px_30px_rgba(244,114,182,0.4)] hover:shadow-[0_15px_40px_rgba(244,114,182,0.6)] hover:-translate-y-1 text-lg">
                    Say Hello <i class="fas fa-paper-plane ml-3"></i>
                </a>
            </div>

            <div class="flex justify-center space-x-8 mt-24" data-aos="fade-up" data-aos-delay="400">
                <a href="https://github.com/rafishaik9505" target="_blank" class="w-14 h-14 rounded-full glass-premium flex items-center justify-center text-gray-500 hover:text-textmain hover:scale-110 transition-all duration-300 shadow-sm">
                    <i class="fab fa-github text-2xl"></i>
                </a>
                <a href="https://www.linkedin.com/in/shaik-rafi-813000357?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank" class="w-14 h-14 rounded-full glass-premium flex items-center justify-center text-gray-500 hover:text-[#0a66c2] hover:scale-110 transition-all duration-300 shadow-sm">
                    <i class="fab fa-linkedin text-2xl"></i>
                </a>
                <a href="https://instagram.com/rafishaik_14" target="_blank" class="w-14 h-14 rounded-full glass-premium flex items-center justify-center text-gray-500 hover:text-[#E1306C] hover:scale-110 transition-all duration-300 shadow-sm">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
                <a href="mailto:23se02ml149@ppsu.ac.in" class="w-14 h-14 rounded-full glass-premium flex items-center justify-center text-gray-500 hover:text-accent1 hover:scale-110 transition-all duration-300 shadow-sm">
                    <i class="fas fa-envelope text-2xl"></i>
                </a>
            </div>
        </div>
    </section>

    <footer class="py-8 border-t border-gray-100 text-center text-sm text-textmuted font-medium relative z-10 glass-premium bg-white/50">
        <p>Designed & Built by <span class="text-accent1 font-bold">Shaik Rafi</span> &copy; <?php echo date("Y"); ?></p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js"></script>
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            once: true,
            offset: 100,
            duration: 800,
            easing: 'ease-out-cubic',
        });

        // Add glass shadow to navbar on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.05)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.85)';
                navbar.style.boxShadow = 'none';
            }
        });
    </script>
</body>
</html>