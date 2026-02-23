export interface apioption{
    key:string,
    name:string,
}


export const groups: apioption[] = [
    {
        key: 'API',
        name : 'API'
    },
    {
        key: 'PAYMENT',
        name : 'PAYMENT'
    },
    {
        key: 'SMS',
        name : 'SMS'
    },
    {
        key: 'WEBHOOK',
        name : 'WEBHOOK'
    },
   
];

//---------- api keys list 

export const apikeys: apioption[] = [
    {
        key: 'google_maps_api_key',
        name : 'Google map Api Key'
    },
    {
        key: 'recaptcha_site_key',
        name : 'Recaptcha Site Key'
    },
    {
        key: 'recaptcha_secret_key',
        name : 'Recaptcha Secret Key'
    },
];