// Views - Icons
import Flags from '@/views/icons/Flags'
import FontAwesome from '@/views/icons/FontAwesome'
import SimpleLineIcons from '@/views/icons/SimpleLineIcons'
import CoreUIIcons from '@/views/icons/CoreUIIcons'

export default {
    path: 'icons',
    redirect: '/icons/font-awesome',
    name: 'Icons',
    component: {
        render(c) {
            return c('router-view')
        }
    },
    children: [
        {
            path: 'coreui-icons',
            name: 'CoreUI Icons',
            component: CoreUIIcons
        },
        {
            path: 'flags',
            name: 'Flags',
            component: Flags,
        },
        {
            path: 'font-awesome',
            name: 'Font Awesome',
            component: FontAwesome,
        },
        {
            path: 'simple-line-icons',
            name: 'Simple Line Icons',
            component: SimpleLineIcons,
        },
    ],
}
