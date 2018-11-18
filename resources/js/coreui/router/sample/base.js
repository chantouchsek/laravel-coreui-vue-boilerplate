// Views - Components
import Cards from '@/views/base/Cards'
import Forms from '@/views/base/Forms'
import Switches from '@/views/base/Switches'
import Tables from '@/views/base/Tables'
import Breadcrumbs from '@/views/base/Breadcrumbs'
import Carousels from '@/views/base/Carousels'
import Collapses from '@/views/base/Collapses'
import Jumbotrons from '@/views/base/Jumbotrons'
import ListGroups from '@/views/base/ListGroups'
import Navs from '@/views/base/Navs'
import Navbars from '@/views/base/Navbars'
import Paginations from '@/views/base/Paginations'
import Popovers from '@/views/base/Popovers'
import ProgressBars from '@/views/base/ProgressBars'
import Tooltips from '@/views/base/Tooltips'
import Tabs from '@/views/base/Tabs'


export default {
    path: 'base',
    redirect: '/base/cards',
    name: 'Base',
    component: {
        render(c) {
            return c('router-view')
        }
    },
    children: [
        {
            path: 'cards',
            name: 'Cards',
            component: Cards,
        },
        {
            path: 'forms',
            name: 'Forms',
            component: Forms,
        },
        {
            path: 'switches',
            name: 'Switches',
            component: Switches,
        },
        {
            path: 'tables',
            name: 'Tables',
            component: Tables,
        },
        {
            path: 'tabs',
            name: 'Tabs',
            component: Tabs
        },
        {
            path: 'breadcrumbs',
            name: 'Breadcrumbs',
            component: Breadcrumbs,
        },
        {
            path: 'carousels',
            name: 'Carousels',
            component: Carousels,
        },
        {
            path: 'collapses',
            name: 'Collapses',
            component: Collapses,
        },
        {
            path: 'jumbotrons',
            name: 'Jumbotrons',
            component: Jumbotrons,
        },
        {
            path: 'list-groups',
            name: 'List Groups',
            component: ListGroups,
        },
        {
            path: 'navs',
            name: 'Navs',
            component: Navs,
        },
        {
            path: 'navbars',
            name: 'Navbars',
            component: Navbars,
        },
        {
            path: 'paginations',
            name: 'Paginations',
            component: Paginations,
        },
        {
            path: 'popovers',
            name: 'Popovers',
            component: Popovers,
        },
        {
            path: 'progress-bars',
            name: 'Progress Bars',
            component: ProgressBars,
        },
        {
            path: 'tooltips',
            name: 'Tooltips',
            component: Tooltips,
        },
    ],
}
