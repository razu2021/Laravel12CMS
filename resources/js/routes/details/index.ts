import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../wayfinder'
/**
* @see \App\Http\Controllers\frontend\frontendController::service
 * @see app/Http/Controllers/frontend/frontendController.php:74
 * @route '/service/details/{id}/{slug}'
 */
export const service = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: service.url(args, options),
    method: 'get',
})

service.definition = {
    methods: ["get","head"],
    url: '/service/details/{id}/{slug}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\frontend\frontendController::service
 * @see app/Http/Controllers/frontend/frontendController.php:74
 * @route '/service/details/{id}/{slug}'
 */
service.url = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions) => {
    if (Array.isArray(args)) {
        args = {
                    id: args[0],
                    slug: args[1],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        id: args.id,
                                slug: args.slug,
                }

    return service.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace('{slug}', parsedArgs.slug.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\frontend\frontendController::service
 * @see app/Http/Controllers/frontend/frontendController.php:74
 * @route '/service/details/{id}/{slug}'
 */
service.get = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: service.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\frontend\frontendController::service
 * @see app/Http/Controllers/frontend/frontendController.php:74
 * @route '/service/details/{id}/{slug}'
 */
service.head = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: service.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\frontend\frontendController::service
 * @see app/Http/Controllers/frontend/frontendController.php:74
 * @route '/service/details/{id}/{slug}'
 */
    const serviceForm = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: service.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\frontend\frontendController::service
 * @see app/Http/Controllers/frontend/frontendController.php:74
 * @route '/service/details/{id}/{slug}'
 */
        serviceForm.get = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: service.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\frontend\frontendController::service
 * @see app/Http/Controllers/frontend/frontendController.php:74
 * @route '/service/details/{id}/{slug}'
 */
        serviceForm.head = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: service.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    service.form = serviceForm
const details = {
    service: Object.assign(service, service),
}

export default details