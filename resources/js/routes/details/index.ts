import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../wayfinder'
/**
* @see \App\Http\Controllers\frontend\frontendController::service
 * @see app/Http/Controllers/frontend/frontendController.php:80
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
 * @see app/Http/Controllers/frontend/frontendController.php:80
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
 * @see app/Http/Controllers/frontend/frontendController.php:80
 * @route '/service/details/{id}/{slug}'
 */
service.get = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: service.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\frontend\frontendController::service
 * @see app/Http/Controllers/frontend/frontendController.php:80
 * @route '/service/details/{id}/{slug}'
 */
service.head = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: service.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\frontend\frontendController::service
 * @see app/Http/Controllers/frontend/frontendController.php:80
 * @route '/service/details/{id}/{slug}'
 */
    const serviceForm = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: service.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\frontend\frontendController::service
 * @see app/Http/Controllers/frontend/frontendController.php:80
 * @route '/service/details/{id}/{slug}'
 */
        serviceForm.get = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: service.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\frontend\frontendController::service
 * @see app/Http/Controllers/frontend/frontendController.php:80
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
/**
* @see \App\Http\Controllers\frontend\frontendController::blog
 * @see app/Http/Controllers/frontend/frontendController.php:0
 * @route '/blog/details/{id}/{slug}'
 */
export const blog = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: blog.url(args, options),
    method: 'get',
})

blog.definition = {
    methods: ["get","head"],
    url: '/blog/details/{id}/{slug}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\frontend\frontendController::blog
 * @see app/Http/Controllers/frontend/frontendController.php:0
 * @route '/blog/details/{id}/{slug}'
 */
blog.url = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions) => {
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

    return blog.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace('{slug}', parsedArgs.slug.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\frontend\frontendController::blog
 * @see app/Http/Controllers/frontend/frontendController.php:0
 * @route '/blog/details/{id}/{slug}'
 */
blog.get = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: blog.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\frontend\frontendController::blog
 * @see app/Http/Controllers/frontend/frontendController.php:0
 * @route '/blog/details/{id}/{slug}'
 */
blog.head = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: blog.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\frontend\frontendController::blog
 * @see app/Http/Controllers/frontend/frontendController.php:0
 * @route '/blog/details/{id}/{slug}'
 */
    const blogForm = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: blog.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\frontend\frontendController::blog
 * @see app/Http/Controllers/frontend/frontendController.php:0
 * @route '/blog/details/{id}/{slug}'
 */
        blogForm.get = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: blog.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\frontend\frontendController::blog
 * @see app/Http/Controllers/frontend/frontendController.php:0
 * @route '/blog/details/{id}/{slug}'
 */
        blogForm.head = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: blog.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    blog.form = blogForm
/**
* @see \App\Http\Controllers\frontend\frontendController::event
 * @see app/Http/Controllers/frontend/frontendController.php:94
 * @route '/event/details/{id}/{slug}'
 */
export const event = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: event.url(args, options),
    method: 'get',
})

event.definition = {
    methods: ["get","head"],
    url: '/event/details/{id}/{slug}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\frontend\frontendController::event
 * @see app/Http/Controllers/frontend/frontendController.php:94
 * @route '/event/details/{id}/{slug}'
 */
event.url = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions) => {
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

    return event.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace('{slug}', parsedArgs.slug.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\frontend\frontendController::event
 * @see app/Http/Controllers/frontend/frontendController.php:94
 * @route '/event/details/{id}/{slug}'
 */
event.get = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: event.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\frontend\frontendController::event
 * @see app/Http/Controllers/frontend/frontendController.php:94
 * @route '/event/details/{id}/{slug}'
 */
event.head = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: event.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\frontend\frontendController::event
 * @see app/Http/Controllers/frontend/frontendController.php:94
 * @route '/event/details/{id}/{slug}'
 */
    const eventForm = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: event.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\frontend\frontendController::event
 * @see app/Http/Controllers/frontend/frontendController.php:94
 * @route '/event/details/{id}/{slug}'
 */
        eventForm.get = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: event.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\frontend\frontendController::event
 * @see app/Http/Controllers/frontend/frontendController.php:94
 * @route '/event/details/{id}/{slug}'
 */
        eventForm.head = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: event.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    event.form = eventForm
/**
* @see \App\Http\Controllers\frontend\frontendController::post
 * @see app/Http/Controllers/frontend/frontendController.php:101
 * @route '/post/details/{id}/{slug}'
 */
export const post = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: post.url(args, options),
    method: 'get',
})

post.definition = {
    methods: ["get","head"],
    url: '/post/details/{id}/{slug}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\frontend\frontendController::post
 * @see app/Http/Controllers/frontend/frontendController.php:101
 * @route '/post/details/{id}/{slug}'
 */
post.url = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions) => {
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

    return post.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace('{slug}', parsedArgs.slug.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\frontend\frontendController::post
 * @see app/Http/Controllers/frontend/frontendController.php:101
 * @route '/post/details/{id}/{slug}'
 */
post.get = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: post.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\frontend\frontendController::post
 * @see app/Http/Controllers/frontend/frontendController.php:101
 * @route '/post/details/{id}/{slug}'
 */
post.head = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: post.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\frontend\frontendController::post
 * @see app/Http/Controllers/frontend/frontendController.php:101
 * @route '/post/details/{id}/{slug}'
 */
    const postForm = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: post.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\frontend\frontendController::post
 * @see app/Http/Controllers/frontend/frontendController.php:101
 * @route '/post/details/{id}/{slug}'
 */
        postForm.get = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: post.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\frontend\frontendController::post
 * @see app/Http/Controllers/frontend/frontendController.php:101
 * @route '/post/details/{id}/{slug}'
 */
        postForm.head = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: post.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    post.form = postForm
/**
* @see \App\Http\Controllers\frontend\frontendController::news
 * @see app/Http/Controllers/frontend/frontendController.php:108
 * @route '/news/details/{id}/{slug}'
 */
export const news = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: news.url(args, options),
    method: 'get',
})

news.definition = {
    methods: ["get","head"],
    url: '/news/details/{id}/{slug}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\frontend\frontendController::news
 * @see app/Http/Controllers/frontend/frontendController.php:108
 * @route '/news/details/{id}/{slug}'
 */
news.url = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions) => {
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

    return news.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace('{slug}', parsedArgs.slug.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\frontend\frontendController::news
 * @see app/Http/Controllers/frontend/frontendController.php:108
 * @route '/news/details/{id}/{slug}'
 */
news.get = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: news.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\frontend\frontendController::news
 * @see app/Http/Controllers/frontend/frontendController.php:108
 * @route '/news/details/{id}/{slug}'
 */
news.head = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: news.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\frontend\frontendController::news
 * @see app/Http/Controllers/frontend/frontendController.php:108
 * @route '/news/details/{id}/{slug}'
 */
    const newsForm = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: news.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\frontend\frontendController::news
 * @see app/Http/Controllers/frontend/frontendController.php:108
 * @route '/news/details/{id}/{slug}'
 */
        newsForm.get = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: news.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\frontend\frontendController::news
 * @see app/Http/Controllers/frontend/frontendController.php:108
 * @route '/news/details/{id}/{slug}'
 */
        newsForm.head = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: news.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    news.form = newsForm
/**
* @see \App\Http\Controllers\frontend\frontendController::promot
 * @see app/Http/Controllers/frontend/frontendController.php:0
 * @route '/promot/details/{id}/{slug}'
 */
export const promot = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: promot.url(args, options),
    method: 'get',
})

promot.definition = {
    methods: ["get","head"],
    url: '/promot/details/{id}/{slug}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\frontend\frontendController::promot
 * @see app/Http/Controllers/frontend/frontendController.php:0
 * @route '/promot/details/{id}/{slug}'
 */
promot.url = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions) => {
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

    return promot.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace('{slug}', parsedArgs.slug.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\frontend\frontendController::promot
 * @see app/Http/Controllers/frontend/frontendController.php:0
 * @route '/promot/details/{id}/{slug}'
 */
promot.get = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: promot.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\frontend\frontendController::promot
 * @see app/Http/Controllers/frontend/frontendController.php:0
 * @route '/promot/details/{id}/{slug}'
 */
promot.head = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: promot.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\frontend\frontendController::promot
 * @see app/Http/Controllers/frontend/frontendController.php:0
 * @route '/promot/details/{id}/{slug}'
 */
    const promotForm = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: promot.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\frontend\frontendController::promot
 * @see app/Http/Controllers/frontend/frontendController.php:0
 * @route '/promot/details/{id}/{slug}'
 */
        promotForm.get = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: promot.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\frontend\frontendController::promot
 * @see app/Http/Controllers/frontend/frontendController.php:0
 * @route '/promot/details/{id}/{slug}'
 */
        promotForm.head = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: promot.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    promot.form = promotForm
/**
* @see \App\Http\Controllers\frontend\frontendController::team
 * @see app/Http/Controllers/frontend/frontendController.php:116
 * @route '/team/details/{id}/{slug}'
 */
export const team = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: team.url(args, options),
    method: 'get',
})

team.definition = {
    methods: ["get","head"],
    url: '/team/details/{id}/{slug}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\frontend\frontendController::team
 * @see app/Http/Controllers/frontend/frontendController.php:116
 * @route '/team/details/{id}/{slug}'
 */
team.url = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions) => {
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

    return team.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace('{slug}', parsedArgs.slug.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\frontend\frontendController::team
 * @see app/Http/Controllers/frontend/frontendController.php:116
 * @route '/team/details/{id}/{slug}'
 */
team.get = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: team.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\frontend\frontendController::team
 * @see app/Http/Controllers/frontend/frontendController.php:116
 * @route '/team/details/{id}/{slug}'
 */
team.head = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: team.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\frontend\frontendController::team
 * @see app/Http/Controllers/frontend/frontendController.php:116
 * @route '/team/details/{id}/{slug}'
 */
    const teamForm = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: team.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\frontend\frontendController::team
 * @see app/Http/Controllers/frontend/frontendController.php:116
 * @route '/team/details/{id}/{slug}'
 */
        teamForm.get = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: team.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\frontend\frontendController::team
 * @see app/Http/Controllers/frontend/frontendController.php:116
 * @route '/team/details/{id}/{slug}'
 */
        teamForm.head = (args: { id: string | number, slug: string | number } | [id: string | number, slug: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: team.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    team.form = teamForm
const details = {
    service: Object.assign(service, service),
blog: Object.assign(blog, blog),
event: Object.assign(event, event),
post: Object.assign(post, post),
news: Object.assign(news, news),
promot: Object.assign(promot, promot),
team: Object.assign(team, team),
}

export default details