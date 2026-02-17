// Define a Theme type
export interface Theme {
  key: string;
  name: string;
  preview: string;
}

// Hero section themes
export const heroThemes: Theme[] = [
  {
    key: 'hero-classic',
    name: 'Classic Hero',
    preview: 'https://picsum.photos/400/250?1'
  },
  {
    key: 'hero-modern',
    name: 'Modern Hero',
    preview: 'https://picsum.photos/400/250?2'
  },
  {
    key: 'hero-hospital',
    name: 'Hospital Hero',
    preview: 'https://picsum.photos/400/250?3'
  },
  {
    key: 'hero-minimal',
    name: 'Minimal Hero',
    preview: 'https://picsum.photos/400/250?4'
  }
];

// Service section themes (example)
export const serviceThemes: Theme[] = [
  {
    key: 'service-grid',
    name: 'Service Grid',
    preview: 'https://picsum.photos/400/250?5'
  },
  {
    key: 'service-card',
    name: 'Service Card',
    preview: 'https://picsum.photos/400/250?6'
  }
];
