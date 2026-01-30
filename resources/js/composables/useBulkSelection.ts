import { ref, computed } from 'vue'
import Swal from 'sweetalert2'
import { router } from '@inertiajs/vue3'
import { route } from 'ziggy-js' 

interface Item {
  id: number
  [key: string]: any
}


export function useBulkSelection(items: Item[]){

    // ---- select IDs
    const selectedIds = ref<number[]>([]);


    //--------- master checkbox logic
    const isAnySelected = computed<boolean>(() => selectedIds.value.length > 0)


    //--- toggle all items 
    
    const toggleSelectAll = (allItems: Item[]) =>{
        selectedIds.value = isAnySelected.value ? [] : allItems.map(i => i.id)
    }



    // --- bulk action with sweet alert 

    const bulkAction = (actionType: string , allItems: Item[]) =>{

        if(!selectedIds.value.length) return


    Swal.fire({
      title: 'Are you sure?',
      text: `You are going to ${actionType} ${selectedIds.value.length} item(s).`,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, proceed!',
      cancelButtonText: 'Cancel',
    }).then((result) => {
      if (result.isConfirmed) {
        router.post(route('category_page.bulkAction'), {
          ids: selectedIds.value,
          action: actionType
        }, {
          onSuccess: () => {
            Swal.fire('Success!', `${actionType} action performed.`, 'success')
            selectedIds.value = []
          },
          onError: () => {
            Swal.fire('Error!', 'Something went wrong.', 'error')
          }
        })
      }
    })

    }



  return {
    selectedIds,
    isAnySelected,
    toggleSelectAll,
    bulkAction
  }










}