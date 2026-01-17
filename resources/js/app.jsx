import './bootstrap';
import React from 'react';
import { createRoot } from 'react-dom/client';
import ColorBends from './components/ColorBends';

// Esperar a que el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
    // Montar ColorBends en sección Services
    const servicesContainer = document.getElementById('services-background');
    if (servicesContainer) {
        const servicesRoot = createRoot(servicesContainer);
        servicesRoot.render(
            <ColorBends 
                colors={['#f0f9ff', '#e0f2fe', '#bae6fd', '#7dd3fc']} 
                speed={0.0003}
            />
        );
    }

    // Montar ColorBends en sección Process
    const processContainer = document.getElementById('process-background');
    if (processContainer) {
        const processRoot = createRoot(processContainer);
        processRoot.render(
            <ColorBends 
                colors={['#faf5ff', '#f5f3ff', '#e9d5ff', '#d8b4fe']} 
                speed={0.0004}
            />
        );
    }

    // Montar ColorBends en sección CTA
    const ctaContainer = document.getElementById('cta-background');
    if (ctaContainer) {
        const ctaRoot = createRoot(ctaContainer);
        ctaRoot.render(
            <ColorBends 
                colors={['#fef3c7', '#fef9c3', '#fef08a', '#fde047']} 
                speed={0.0005}
            />
        );
    }

    // Montar ColorBends en página de prueba
    const testContainer = document.getElementById('test-background');
    if (testContainer) {
        const testRoot = createRoot(testContainer);
        testRoot.render(
            <ColorBends 
                colors={['#3b82f6', '#60a5fa', '#93c5fd', '#dbeafe']} 
                speed={0.0003}
            />
        );
    }
});

