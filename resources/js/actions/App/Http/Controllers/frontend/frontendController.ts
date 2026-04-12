import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../../wayfinder'
/**
* @see \App\Http\Controllers\frontend\frontendController::index
 * @see app/Http/Controllers/frontend/frontendController.php:16
 * @route '/'
 */
export const index = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})

index.definition = {
    methods: ["get","head"],
    url: '/',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\frontend\frontendController::index
 * @see app/Http/Controllers/frontend/frontendController.php:16
 * @route '/'
 */
index.url = (options?: RouteQueryOptions) => {
    return index.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\frontend\frontendController::index
 * @see app/Http/Controllers/frontend/frontendController.php:16
 * @route '/'
 */
index.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\frontend\frontendController::index
 * @see app/Http/Controllers/frontend/frontendController.php:16
 * @route '/'
 */
index.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: index.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\frontend\frontendController::index
 * @see app/Http/Controllers/frontend/frontendController.php:16
 * @route '/'
 */
    const indexForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: index.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\frontend\frontendController::index
 * @see app/Http/Controllers/frontend/frontendController.php:16
 * @route '/'
 */
        indexForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: index.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\frontend\frontendController::index
 * @see app/Http/Controllers/frontend/frontendController.php:16
 * @route '/'
 */
        indexForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: index.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    index.form = indexForm
/**
* @see \App\Http\Controllers\frontend\frontendController::section
 * @see app/Http/Controllers/frontend/frontendController.php:76
 * @route '/section'
 */
export const section = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: section.url(options),
    method: 'get',
})

section.definition = {
    methods: ["get","head"],
    url: '/section',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\frontend\frontendController::section
 * @see app/Http/Controllers/frontend/frontendController.php:76
 * @route '/section'
 */
section.url = (options?: RouteQueryOptions) => {
    return section.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\frontend\frontendController::section
 * @see app/Http/Controllers/frontend/frontendController.php:76
 * @route '/section'
 */
section.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: section.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\frontend\frontendController::section
 * @see app/Http/Controllers/frontend/frontendController.php:76
 * @route '/section'
 */
section.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: section.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\frontend\frontendController::section
 * @see app/Http/Controllers/frontend/frontendController.php:76
 * @route '/section'
 */
    const sectionForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: section.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\frontend\frontendController::section
 * @see app/Http/Controllers/frontend/frontendController.php:76
 * @route '/section'
 */
        sectionForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: section.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\frontend\frontendController::section
 * @see app/Http/Controllers/frontend/frontendController.php:76
 * @route '/section'
 */
        sectionForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: section.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    section.form = sectionForm
/**
* @see \App\Http\Controllers\frontend\frontendController::categoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:24
 * @route '/{category}'
 */
export const categoryPage = (args: { category: string | number } | [category: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: categoryPage.url(args, options),
    method: 'get',
})

categoryPage.definition = {
    methods: ["get","head"],
    url: '/{category}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\frontend\frontendController::categoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:24
 * @route '/{category}'
 */
categoryPage.url = (args: { category: string | number } | [category: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { category: args }
    }

    
    if (Array.isArray(args)) {
        args = {
                    category: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        category: args.category,
                }

    return categoryPage.definition.url
            .replace('{category}', parsedArgs.category.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\frontend\frontendController::categoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:24
 * @route '/{category}'
 */
categoryPage.get = (args: { category: string | number } | [category: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: categoryPage.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\frontend\frontendController::categoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:24
 * @route '/{category}'
 */
categoryPage.head = (args: { category: string | number } | [category: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: categoryPage.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\frontend\frontendController::categoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:24
 * @route '/{category}'
 */
    const categoryPageForm = (args: { category: string | number } | [category: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: categoryPage.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\frontend\frontendController::categoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:24
 * @route '/{category}'
 */
        categoryPageForm.get = (args: { category: string | number } | [category: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: categoryPage.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\frontend\frontendController::categoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:24
 * @route '/{category}'
 */
        categoryPageForm.head = (args: { category: string | number } | [category: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: categoryPage.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    categoryPage.form = categoryPageForm
/**
* @see \App\Http\Controllers\frontend\frontendController::subCategoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:39
 * @route '/{category}/{subcategory}'
 */
export const subCategoryPage = (args: { category: string | number, subcategory: string | number } | [category: string | number, subcategory: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: subCategoryPage.url(args, options),
    method: 'get',
})

subCategoryPage.definition = {
    methods: ["get","head"],
    url: '/{category}/{subcategory}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\frontend\frontendController::subCategoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:39
 * @route '/{category}/{subcategory}'
 */
subCategoryPage.url = (args: { category: string | number, subcategory: string | number } | [category: string | number, subcategory: string | number ], options?: RouteQueryOptions) => {
    if (Array.isArray(args)) {
        args = {
                    category: args[0],
                    subcategory: args[1],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        category: args.category,
                                subcategory: args.subcategory,
                }

    return subCategoryPage.definition.url
            .replace('{category}', parsedArgs.category.toString())
            .replace('{subcategory}', parsedArgs.subcategory.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\frontend\frontendController::subCategoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:39
 * @route '/{category}/{subcategory}'
 */
subCategoryPage.get = (args: { category: string | number, subcategory: string | number } | [category: string | number, subcategory: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: subCategoryPage.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\frontend\frontendController::subCategoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:39
 * @route '/{category}/{subcategory}'
 */
subCategoryPage.head = (args: { category: string | number, subcategory: string | number } | [category: string | number, subcategory: string | number ], options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: subCategoryPage.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\frontend\frontendController::subCategoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:39
 * @route '/{category}/{subcategory}'
 */
    const subCategoryPageForm = (args: { category: string | number, subcategory: string | number } | [category: string | number, subcategory: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: subCategoryPage.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\frontend\frontendController::subCategoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:39
 * @route '/{category}/{subcategory}'
 */
        subCategoryPageForm.get = (args: { category: string | number, subcategory: string | number } | [category: string | number, subcategory: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: subCategoryPage.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\frontend\frontendController::subCategoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:39
 * @route '/{category}/{subcategory}'
 */
        subCategoryPageForm.head = (args: { category: string | number, subcategory: string | number } | [category: string | number, subcategory: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: subCategoryPage.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    subCategoryPage.form = subCategoryPageForm
/**
* @see \App\Http\Controllers\frontend\frontendController::childCategoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:57
 * @route '/{category}/{subcategory}/{childcategory}'
 */
export const childCategoryPage = (args: { category: string | number, subcategory: string | number, childcategory: string | number } | [category: string | number, subcategory: string | number, childcategory: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: childCategoryPage.url(args, options),
    method: 'get',
})

childCategoryPage.definition = {
    methods: ["get","head"],
    url: '/{category}/{subcategory}/{childcategory}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\frontend\frontendController::childCategoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:57
 * @route '/{category}/{subcategory}/{childcategory}'
 */
childCategoryPage.url = (args: { category: string | number, subcategory: string | number, childcategory: string | number } | [category: string | number, subcategory: string | number, childcategory: string | number ], options?: RouteQueryOptions) => {
    if (Array.isArray(args)) {
        args = {
                    category: args[0],
                    subcategory: args[1],
                    childcategory: args[2],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        category: args.category,
                                subcategory: args.subcategory,
                                childcategory: args.childcategory,
                }

    return childCategoryPage.definition.url
            .replace('{category}', parsedArgs.category.toString())
            .replace('{subcategory}', parsedArgs.subcategory.toString())
            .replace('{childcategory}', parsedArgs.childcategory.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\frontend\frontendController::childCategoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:57
 * @route '/{category}/{subcategory}/{childcategory}'
 */
childCategoryPage.get = (args: { category: string | number, subcategory: string | number, childcategory: string | number } | [category: string | number, subcategory: string | number, childcategory: string | number ], options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: childCategoryPage.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\frontend\frontendController::childCategoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:57
 * @route '/{category}/{subcategory}/{childcategory}'
 */
childCategoryPage.head = (args: { category: string | number, subcategory: string | number, childcategory: string | number } | [category: string | number, subcategory: string | number, childcategory: string | number ], options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: childCategoryPage.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\frontend\frontendController::childCategoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:57
 * @route '/{category}/{subcategory}/{childcategory}'
 */
    const childCategoryPageForm = (args: { category: string | number, subcategory: string | number, childcategory: string | number } | [category: string | number, subcategory: string | number, childcategory: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: childCategoryPage.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\frontend\frontendController::childCategoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:57
 * @route '/{category}/{subcategory}/{childcategory}'
 */
        childCategoryPageForm.get = (args: { category: string | number, subcategory: string | number, childcategory: string | number } | [category: string | number, subcategory: string | number, childcategory: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: childCategoryPage.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\frontend\frontendController::childCategoryPage
 * @see app/Http/Controllers/frontend/frontendController.php:57
 * @route '/{category}/{subcategory}/{childcategory}'
 */
        childCategoryPageForm.head = (args: { category: string | number, subcategory: string | number, childcategory: string | number } | [category: string | number, subcategory: string | number, childcategory: string | number ], options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: childCategoryPage.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    childCategoryPage.form = childCategoryPageForm
const frontendController = { index, section, categoryPage, subCategoryPage, childCategoryPage }

export default frontendController