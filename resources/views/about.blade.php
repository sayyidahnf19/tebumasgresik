@extends('layouts.app')

@section('title', 'Tentang Kami - Tebu Mas Gresik')

@section('content')
<style>
    /* Hero Section */
    .about-hero {
        background: linear-gradient(135deg, #FFFEFE 0%, #F8FBFC 50%, #F0F4F9 100%);
        color: #14183E;
        padding: 120px 20px 80px;
        position: relative;
        overflow: hidden;
    }

    .about-hero::before {
        content: '';
        position: absolute;
        top: 50%;
        right: -5%;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(241, 165, 1, 0.06) 0%, transparent 70%);
        border-radius: 50%;
        z-index: 0;
    }

    .about-hero::after {
        content: '';
        position: absolute;
        bottom: 10%;
        left: -8%;
        width: 350px;
        height: 350px;
        background: radial-gradient(circle, rgba(223, 105, 81, 0.04) 0%, transparent 70%);
        border-radius: 50%;
        z-index: 0;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(20px); }
    }

    .about-hero-content {
        position: relative;
        z-index: 1;
        max-width: 900px;
        margin: 0 auto;
    }

    .about-hero h1 {
        font-size: clamp(2.2rem, 7vw, 3.2rem);
        font-weight: 800;
        margin-bottom: 20px;
        line-height: 1.25;
        color: #14183E;
        letter-spacing: -0.02em;
    }

    .about-hero .hero-badge {
        display: inline-block;
        background: linear-gradient(135deg, #F1A501, #DF6951);
        color: white;
        padding: 8px 18px;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 700;
        margin-bottom: 20px;
        letter-spacing: 0.5px;
    }

    .about-hero p {
        font-size: clamp(0.95rem, 2.2vw, 1.1rem);
        margin-bottom: 50px;
        color: #5E6282;
        line-height: 1.8;
        font-weight: 500;
        max-width: 700px;
    }

    .hero-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
        gap: 20px;
        margin-top: 50px;
    }

    .stat-box {
        background: white;
        border: none;
        padding: 32px 25px;
        border-radius: 14px;
        text-align: center;
        box-shadow: 0 4px 16px rgba(20, 24, 62, 0.06);
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        position: relative;
        overflow: hidden;
    }

    .stat-box::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #F1A501 0%, #DF6951 100%);
    }

    .stat-box:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 32px rgba(20, 24, 62, 0.1);
    }

    .stat-number {
        font-size: clamp(1.8rem, 5vw, 2.4rem);
        font-weight: 800;
        margin-bottom: 10px;
        background: linear-gradient(135deg, #F1A501 0%, #DF6951 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .stat-label {
        font-size: 0.85rem;
        color: #5E6282;
        font-weight: 600;
        letter-spacing: 0.3px;
        line-height: 1.4;
    }

    @media (max-width: 768px) {
        .about-hero {
            padding: 80px 20px 60px;
        }
        .about-hero h1 {
            margin-bottom: 15px;
            font-size: 1.8rem;
        }
        .about-hero .hero-badge {
            display: inline-block;
            margin-bottom: 18px;
        }
        .about-hero p {
            margin-bottom: 40px;
            font-size: 0.95rem;
        }
        .hero-stats {
            grid-template-columns: 1fr;
            gap: 15px;
            margin-top: 40px;
        }
        .stat-box {
            padding: 26px 20px;
        }
        .stat-number {
            font-size: 2rem;
        }
    }

    /* Journey Section */
    .journey-section {
        padding: 100px 20px;
        background: #FFFEFE;
        position: relative;
        overflow: hidden;
    }

    .journey-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        width: 700px;
        height: 700px;
        transform: translateX(-60%);
        background: radial-gradient(circle at center, rgba(241, 165, 1, 0.08) 0%, transparent 66%);
        z-index: 0;
    }

    .journey-section::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 520px;
        height: 520px;
        background: radial-gradient(circle at center, rgba(223, 105, 81, 0.08) 0%, transparent 68%);
        z-index: 0;
    }

    .section-header {
        text-align: center;
        margin-bottom: 70px;
        max-width: 720px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        z-index: 1;
    }

    .section-header h2 {
        font-size: clamp(1.9rem, 6vw, 3rem);
        margin-bottom: 18px;
        color: #14183E;
        font-weight: 800;
        letter-spacing: -0.01em;
    }

    .section-header p {
        font-size: clamp(1rem, 2vw, 1.15rem);
        color: #5E6282;
        line-height: 1.75;
        font-weight: 500;
    }

    .journey-container {
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }

    .timeline-wrapper {
        position: relative;
        padding: 20px 0 40px;
    }

    .timeline-line {
        position: absolute;
        top: 120px;
        bottom: 120px;
        left: 50%;
        width: 4px;
        background: linear-gradient(180deg, #F1A501 0%, #DF6951 50%, #F1A501 100%);
        transform: translateX(-50%);
        z-index: 1;
    }

    .timeline-item {
        display: grid;
        grid-template-columns: 1fr 90px 1fr;
        gap: 30px;
        align-items: center;
        margin-bottom: 90px;
        position: relative;
        z-index: 2;
    }

    .timeline-item:last-child {
        margin-bottom: 0;
    }

    .timeline-item:nth-child(odd) .timeline-card {
        justify-self: end;
        text-align: left;
    }

    .timeline-item:nth-child(odd) .timeline-image {
        justify-self: start;
    }

    .timeline-item:nth-child(even) .timeline-card {
        justify-self: start;
        text-align: left;
    }

    .timeline-item:nth-child(even) .timeline-image {
        justify-self: end;
    }

    .timeline-date {
        width: 90px;
        height: 90px;
        min-width: 90px;
        border-radius: 50%;
        background: white;
        border: 4px solid #F1A501;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-weight: 800;
        color: #F1A501;
        font-size: 0.88rem;
        line-height: 1.2;
        padding: 12px;
        box-shadow: 0 14px 40px rgba(241, 165, 1, 0.18);
        white-space: pre-line;
    }

    .timeline-card,
    .timeline-image {
        position: relative;
    }

    .timeline-card {
        background: white;
        padding: 34px;
        border-radius: 24px;
        border: 1px solid rgba(20, 24, 62, 0.08);
        box-shadow: 0 18px 45px rgba(20, 24, 62, 0.08);
        transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s ease;
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    .timeline-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 26px 60px rgba(20, 24, 62, 0.12);
    }

    .timeline-card h3 {
        font-size: clamp(1.35rem, 3vw, 1.9rem);
        margin-bottom: 0;
        color: #14183E;
        font-weight: 800;
        letter-spacing: -0.01em;
    }

    .timeline-card p {
        color: #5E6282;
        font-size: 0.99rem;
        line-height: 1.75;
        margin-bottom: 0;
        font-weight: 500;
    }

    .timeline-card ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: grid;
        gap: 10px;
    }

    .timeline-card li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        color: #5E6282;
        font-size: 0.95rem;
        line-height: 1.7;
        font-weight: 500;
    }

    .timeline-card li::before {
        content: '•';
        color: #F1A501;
        font-size: 1.2rem;
        line-height: 1;
        margin-top: 4px;
    }

    .timeline-image {
        width: 100%;
        max-width: 440px;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 18px 40px rgba(20, 24, 62, 0.08);
    }

    .timeline-image img {
        width: 100%;
        display: block;
        object-fit: cover;
        aspect-ratio: 4 / 3;
        transition: transform 0.5s ease;
    }

    .timeline-image:hover img {
        transform: scale(1.04);
    }

    .digital-highlight .timeline-card {
        background: linear-gradient(135deg, #FFF8F0 0%, #FFF5E6 100%);
        border-color: #F1A501;
    }

    .digital-highlight .timeline-card h3 {
        color: #14183E;
    }

    .digital-highlight .timeline-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: linear-gradient(135deg, #F1A501, #DF6951);
        color: white;
        padding: 8px 16px;
        border-radius: 999px;
        font-size: 0.78rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    @media (max-width: 1024px) {
        .timeline-wrapper {
            padding-top: 20px;
        }

        .timeline-item {
            grid-template-columns: 60px 1fr;
            gap: 22px;
            margin-bottom: 70px;
        }

        .timeline-line {
            left: 30px;
            transform: none;
            top: 80px;
            bottom: 80px;
        }

        .timeline-date {
            justify-self: center;
        }

        .timeline-card,
        .timeline-image {
            width: auto;
            max-width: 100%;
            justify-self: stretch;
            text-align: left;
        }

        .timeline-item:nth-child(odd) .timeline-image,
        .timeline-item:nth-child(even) .timeline-image {
            order: 3;
        }
    }

    @media (max-width: 680px) {
        .journey-section {
            padding: 60px 16px;
        }

        .timeline-line {
            left: 20px;
            width: 3px;
        }

        .timeline-item {
            margin-bottom: 60px;
        }

        .timeline-date {
            width: 70px;
            height: 70px;
            font-size: 1rem;
        }

        .timeline-card {
            padding: 24px;
            border-radius: 20px;
        }

        .timeline-card h3 {
            font-size: 1.4rem;
        }

        .timeline-card p,
        .timeline-card li {
            font-size: 0.92rem;
        }
    }

    /* Values Section */
    .values-section {
        padding: 100px 20px;
        background: #F7F9FC;
        position: relative;
        overflow: hidden;
    }

    .values-section::before {
        content: '';
        position: absolute;
        top: -30px;
        right: -8%;
        width: 220px;
        height: 220px;
        background: radial-gradient(circle, rgba(241, 165, 1, 0.08) 0%, transparent 65%);
        border-radius: 50%;
        z-index: 0;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 28px;
        max-width: 1300px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }

    .value-card {
        background: white;
        padding: 34px 30px;
        border-radius: 24px;
        box-shadow: 0 20px 50px rgba(20, 24, 62, 0.08);
        transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.35s ease;
        text-align: center;
        border: 1px solid rgba(20, 24, 62, 0.06);
        position: relative;
        overflow: hidden;
        min-height: 280px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .value-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 6px;
        background: linear-gradient(90deg, #F1A501 0%, #DF6951 100%);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.35s ease;
    }

    .value-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 28px 70px rgba(20, 24, 62, 0.12);
    }

    .value-card:hover::before {
        transform: scaleX(1);
    }

    .value-icon {
        width: 62px;
        height: 62px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: linear-gradient(135deg, #F1A501 0%, #DF6951 100%);
        color: white;
        font-size: 1.6rem;
        line-height: 1;
        margin: 0 auto 24px auto;
        transition: transform 0.35s ease;
        flex-shrink: 0;
    }

    .value-card:hover .value-icon {
        transform: scale(1.05);
    }

    .value-card h4 {
        font-size: 1.25rem;
        margin-bottom: 14px;
        color: #14183E;
        font-weight: 800;
        letter-spacing: -0.01em;
    }

    .value-card p {
        color: #5E6282;
        font-size: 0.96rem;
        line-height: 1.75;
        font-weight: 500;
        margin-top: auto;
    }

    @media (max-width: 1024px) {
        .values-grid {
            gap: 24px;
        }

        .value-card {
            min-height: auto;
        }
    }

    @media (max-width: 768px) {
        .values-section {
            padding: 70px 20px;
        }
        .values-grid {
            gap: 22px;
            grid-template-columns: 1fr;
        }
        .value-card {
            padding: 28px 22px;
        }
        .value-icon {
            width: 56px;
            height: 56px;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }
    }

    /* Quality Showcase */
    .quality-section {
        padding: 100px 20px;
        background: #F7F9FC;
        color: #14183E;
        position: relative;
        overflow: hidden;
    }

    .quality-section::after {
        content: '';
        position: absolute;
        top: -20px;
        right: 5%;
        width: 240px;
        height: 240px;
        background: radial-gradient(circle, rgba(241, 165, 1, 0.08) 0%, transparent 70%);
        border-radius: 50%;
        z-index: 0;
    }

    .quality-container {
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }

    .quality-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .quality-header h2 {
        font-size: clamp(1.9rem, 5vw, 2.8rem);
        margin-bottom: 18px;
        color: #14183E;
        font-weight: 800;
        letter-spacing: -0.02em;
    }

    .quality-header p {
        font-size: clamp(1rem, 2vw, 1.1rem);
        color: #5E6282;
        max-width: 640px;
        margin: 0 auto;
        line-height: 1.75;
        font-weight: 500;
    }

    .quality-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 28px;
    }

    .quality-item {
        background: white;
        padding: 32px;
        border-radius: 24px;
        box-shadow: 0 18px 40px rgba(20, 24, 62, 0.08);
        border: 1px solid rgba(20, 24, 62, 0.08);
        overflow: hidden;
        position: relative;
        transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .quality-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #F1A501 0%, #DF6951 100%);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.35s ease;
    }

    .quality-item:hover {
        transform: translateY(-8px);
        box-shadow: 0 26px 60px rgba(20, 24, 62, 0.12);
        border-color: rgba(20, 24, 62, 0.12);
    }

    .quality-item:hover::before {
        transform: scaleX(1);
    }

    .quality-item h4 {
        font-size: 1.15rem;
        margin: 0;
        color: #14183E;
        font-weight: 800;
        letter-spacing: -0.01em;
    }

    .quality-item p {
        color: #5E6282;
        font-size: 0.95rem;
        line-height: 1.75;
        margin: 0;
        font-weight: 500;
    }

    @media (max-width: 1024px) {
        .quality-grid {
            gap: 24px;
        }
    }

    @media (max-width: 768px) {
        .quality-section {
            padding: 70px 20px;
        }
        .quality-header {
            margin-bottom: 50px;
        }
        .quality-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        .quality-item {
            padding: 26px;
        }
    }

    /* Product Showcase */
    .product-showcase {
        padding: 100px 20px;
        background: #FFFFFF;
        position: relative;
        overflow: hidden;
    }

    .product-showcase::before {
        content: '';
        position: absolute;
        top: 10%;
        left: 5%;
        width: 180px;
        height: 180px;
        background: radial-gradient(circle, rgba(241, 165, 1, 0.08) 0%, transparent 70%);
        border-radius: 50%;
        z-index: 0;
    }

    .product-showcase-container {
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }

    .product-showcase-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 28px;
    }

    .product-item {
        background: #F9FAFB;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 22px 50px rgba(20, 24, 62, 0.08);
        transition: transform 0.35s ease, box-shadow 0.35s ease;
        position: relative;
        border: 1px solid rgba(20, 24, 62, 0.06);
        display: flex;
        flex-direction: column;
    }

    .product-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, #F1A501 0%, #DF6951 100%);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.35s ease;
    }

    .product-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 28px 70px rgba(20, 24, 62, 0.14);
    }

    .product-item:hover::before {
        transform: scaleX(1);
    }

    .product-image {
        min-height: 250px;
        overflow: hidden;
        background: #F4F6F9;
        position: relative;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
        display: block;
    }

    .product-item:hover .product-image img {
        transform: scale(1.05);
    }

    .product-info {
        padding: 28px 26px 30px;
        display: flex;
        flex-direction: column;
        gap: 14px;
        flex-grow: 1;
    }

    .product-info h4 {
        font-size: 1.3rem;
        margin: 0;
        color: #14183E;
        font-weight: 800;
        letter-spacing: -0.02em;
    }

    .product-info p {
        font-size: 1rem;
        color: #5E6282;
        line-height: 1.75;
        margin: 0;
        font-weight: 500;
    }

    @media (max-width: 1024px) {
        .product-showcase-grid {
            gap: 24px;
        }
    }

    @media (max-width: 768px) {
        .product-showcase {
            padding: 70px 20px;
        }
        .product-showcase-grid {
            gap: 22px;
            grid-template-columns: 1fr;
        }
        .product-image {
            min-height: 220px;
        }
        .product-info {
            padding: 24px 22px 26px;
        }
    }

    @media (max-width: 480px) {
        .product-showcase {
            padding: 55px 16px;
        }
        .product-image {
            min-height: 200px;
        }
    }

    /* CTA Section */
    .about-cta {
        padding: 100px 20px;
        background: linear-gradient(135deg, #14183E 0%, #1F2937 50%, #2D3748 100%);
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .about-cta::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(241, 165, 1, 0.08) 0%, transparent 70%);
        border-radius: 50%;
        z-index: 0;
        animation: float 8s ease-in-out infinite;
    }

    .about-cta-content {
        max-width: 750px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }

    .about-cta h2 {
        font-size: clamp(1.8rem, 6vw, 3rem);
        margin-bottom: 30px;
        color: white;
        font-weight: 800;
        letter-spacing: -0.01em;
    }

    .about-cta p {
        font-size: clamp(1rem, 2vw, 1.15rem);
        margin-bottom: 50px;
        opacity: 0.95;
        line-height: 1.8;
        font-weight: 500;
    }

    .cta-buttons {
        display: flex;
        gap: 25px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-primary {
        background: linear-gradient(135deg, #F1A501 0%, #DF6951 100%);
        color: white;
        padding: 16px 45px;
        border: none;
        border-radius: 10px;
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        text-decoration: none;
        display: inline-block;
        letter-spacing: 0.5px;
        box-shadow: 0 10px 30px rgba(241, 165, 1, 0.25);
    }

    .btn-primary:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 50px rgba(241, 165, 1, 0.35);
    }

    .btn-secondary {
        background: transparent;
        color: white;
        padding: 16px 45px;
        border: 2px solid #F1A501;
        border-radius: 10px;
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        text-decoration: none;
        display: inline-block;
        letter-spacing: 0.5px;
    }

    .btn-secondary:hover {
        background: #F1A501;
        color: #14183E;
        transform: translateY(-4px);
        box-shadow: 0 15px 40px rgba(241, 165, 1, 0.25);
    }

    @media (max-width: 768px) {
        .about-cta {
            padding: 70px 20px;
        }
        .about-cta h2 {
            margin-bottom: 20px;
        }
        .about-cta p {
            margin-bottom: 35px;
        }
        .cta-buttons {
            flex-direction: column;
            gap: 15px;
        }
        .btn-primary, .btn-secondary {
            width: 100%;
            padding: 14px 30px;
            font-size: 0.95rem;
        }
    }

    /* Global Responsive */
    @media (max-width: 1024px) {
        .journey-grid {
            gap: 50px !important;
        }
    }

    @media (max-width: 480px) {
        .section-header h2 {
            font-size: 1.6rem;
        }
        .value-card {
            padding: 28px 20px;
        }
        .quality-item {
            padding: 25px;
        }
    }
</style>

<!-- Hero Section -->
<section class="about-hero">
    <div class="about-hero-content">
        <div class="hero-badge">Tentang Kami</div>
        <h1>Kepercayaan 30+ Tahun<br>dari Ribuan Pelanggan</h1>
        <p>Sejak 1993, Tebu Mas Gresik berkomitmen menghadirkan songkok berkualitas premium dengan dedikasi penuh terhadap kepuasan pelanggan.</p>
        <div class="hero-stats">
            <div class="stat-box">
                <div class="stat-number">30+</div>
                <div class="stat-label">Tahun Berpengalaman</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">10K+</div>
                <div class="stat-label">Pelanggan Setia</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">100%</div>
                <div class="stat-label">Kepuasan Terjamin</div>
            </div>
        </div>
    </div>
</section>

<!-- Journey Section -->
<section class="journey-section">
    <div class="journey-container">
        <div class="section-header">
            <h2>Perjalanan Kami</h2>
            <p>Dari usaha kecil hingga menjadi pilihan utama pelanggan, setiap langkah kami dibangun atas kualitas, kepercayaan, dan inovasi.</p>
        </div>

        <div class="timeline-wrapper">
            <div class="timeline-line"></div>

            <div class="timeline-item">
                <div class="timeline-card">
                    <h3>Dimulai dari Passion</h3>
                    <p>Pada tahun 1993, Tebu Mas Gresik lahir dari hasrat sederhana: membuat songkok berkualitas dengan perhatian penuh pada detail dan kenyamanan.</p>
                    <ul>
                        <li>Bahan premium terpilih</li>
                        <li>Kerajinan tangan rapi dan konsisten</li>
                        <li>Layanan pelanggan hangat dan terpercaya</li>
                    </ul>
                </div>
                <div class="timeline-date">1993</div>
                <div class="timeline-image">
                    <img src="{{ asset('img/category/Songkok.png') }}" alt="Songkok Tebu Mas Gresik awal berdiri">
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-image">
                    <img src="{{ asset('img/category/fullac.png') }}" alt="Pengembangan produk Tebu Mas Gresik">
                </div>
                <div class="timeline-date">2015</div>
                <div class="timeline-card">
                    <h3>Berkembang & Berinovasi</h3>
                    <p>Kami memperluas jangkauan pasar dan meningkatkan varian produk dengan dukungan proses produksi modern dan tim profesional.</p>
                    <ul>
                        <li>Distribusi ke banyak wilayah di Indonesia</li>
                        <li>Desain baru yang elegan dan relevan</li>
                        <li>Standar kualitas yang semakin tinggi</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-item digital-highlight">
                <div class="timeline-card">
                    <span class="timeline-badge">Era Digital</span>
                    <h3>Transformasi Digital</h3>
                    <p>Tahun 2026 menjadi titik balik digital kami, menghadirkan platform online dan pengalaman pembelian yang mudah untuk pelanggan di mana saja.</p>
                    <ul>
                        <li>Marketplace online yang user-friendly</li>
                        <li>Pemasaran digital untuk menjangkau lebih luas</li>
                        <li>Layanan pembelian dan pengiriman lebih cepat</li>
                    </ul>
                </div>
                <div class="timeline-date">2026</div>
                <div class="timeline-image">
                    <img src="{{ asset('img/category/kirim.jpeg') }}" alt="Digital marketing dan pengiriman Tebu Mas Gresik">
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-image">
                    <img src="{{ asset('img/category/ac.png') }}" alt="Visi masa depan Tebu Mas Gresik">
                </div>
                <div class="timeline-date">Masa<br>Depan</div>
                <div class="timeline-card">
                    <h3>Visi Masa Depan</h3>
                    <p>Kami terus berinovasi untuk menjadikan Tebu Mas Gresik sebagai pilihan utama pelanggan di berbagai generasi, baik secara offline maupun online.</p>
                    <ul>
                        <li>Produk berkualitas dengan harga bersaing</li>
                        <li>Pengiriman cepat dan andal</li>
                        <li>Pelayanan pelanggan yang responsif</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="values-section">
    <div class="section-header">
        <h2>Nilai-Nilai Kami</h2>
        <p>Prinsip-prinsip yang membimbing setiap keputusan dan tindakan kami dalam melayani Anda.</p>
    </div>

    <div class="values-grid">
        <div class="value-card">
            <div class="value-icon">🎯</div>
            <h4>Kualitas Pertama</h4>
            <p>Kualitas bukan hanya janji, tapi komitmen kami. Setiap produk melalui kontrol kualitas ketat untuk memastikan kepuasan Anda.</p>
        </div>
        <div class="value-card">
            <div class="value-icon">🤝</div>
            <h4>Kepercayaan Pelanggan</h4>
            <p>Kepercayaan Anda adalah aset paling berharga bagi kami. Kami selalu berusaha memberikan yang terbaik dalam setiap interaksi.</p>
        </div>
        <div class="value-card">
            <div class="value-icon">⚡</div>
            <h4>Inovasi Berkelanjutan</h4>
            <p>Kami terus berinovasi untuk menghadirkan produk terbaru yang mengikuti tren global namun tetap mempertahankan nilai tradisional.</p>
        </div>
        <div class="value-card">
            <div class="value-icon">💚</div>
            <h4>Tanggung Jawab Sosial</h4>
            <p>Kami percaya bisnis yang baik harus memberikan dampak positif bagi masyarakat dan lingkungan sekitar kami.</p>
        </div>
        <div class="value-card">
            <div class="value-icon">⭐</div>
            <h4>Profesionalisme</h4>
            <p>Tim kami terdiri dari profesional berpengalaman yang siap memberikan solusi terbaik untuk kebutuhan Anda.</p>
        </div>
        <div class="value-card">
            <div class="value-icon">🚀</div>
            <h4>Pengembangan Berkelanjutan</h4>
            <p>Kami tidak pernah berhenti belajar dan berkembang untuk memberikan layanan yang lebih baik setiap harinya.</p>
        </div>
    </div>
</section>

<!-- Product Showcase -->
<section class="product-showcase">
    <div class="product-showcase-container">
        <div class="section-header">
            <h2>Koleksi Produk Unggulan Kami</h2>
            <p>Ragam varian songkok berkualitas yang kami tawarkan untuk memenuhi setiap kesempatan dan gaya Anda.</p>
        </div>

        <div class="product-showcase-grid">
            <div class="product-item">
                <div class="product-image">
                    <img src="{{ asset('img/category/Songkok.png') }}" alt="Songkok Elegan Tebu Mas Gresik">
                </div>
                <div class="product-info">
                    <h4>Songkok Elegan</h4>
                    <p>SKU khas kami dengan tampilan hitam klasik, diproduksi untuk acara formal dan tampil profesional dengan gaya tradisional yang modern.</p>
                </div>
            </div>
            <div class="product-item">
                <div class="product-image">
                    <img src="{{ asset('img/category/fullac.png') }}" alt="Lini Songkok Nyaman Tebu Mas Gresik">
                </div>
                <div class="product-info">
                    <h4>Songkok Nyaman</h4>
                    <p>Dirancang untuk pemakaian harian, bahan lembut dan gaya ringkas memberikan kenyamanan optimal tanpa mengorbankan kualitas dan ketahanan.</p>
                </div>
            </div>
            <div class="product-item">
                <div class="product-image">
                    <img src="{{ asset('img/category/ac.png') }}" alt="Songkok Premium Tebu Mas Gresik">
                </div>
                <div class="product-info">
                    <h4>Songkok Premium</h4>
                    <p>Varian unggulan dengan detail finishing halus dan kualitas premium untuk konsumen yang mengutamakan kesan mewah dan nilai craftsmanship tinggi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="about-cta">
    <div class="about-cta-content">
        <h2>Siap Meningkatkan Penampilan Anda?</h2>
        <p>Bergabunglah dengan ribuan pelanggan puas yang telah mempercayai Tebu Mas Gresik untuk kebutuhan songkok berkualitas premium mereka. Dapatkan produk terbaik dengan harga yang kompetitif dan layanan pelanggan terbaik.</p>
        <div class="cta-buttons">
            <a href="{{ route('products') }}" class="btn-primary">Lihat Koleksi Lengkap</a>
            <a href="{{ route('contact') }}" class="btn-secondary">Hubungi Kami</a>
        </div>
    </div>
</section>

@endsection
