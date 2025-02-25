import Clipboard from '@ryangjchandler/alpine-clipboard';
import { Alpine, Livewire } from '../../vendor/livewire/livewire/dist/livewire.esm';
import './bootstrap';
 
Alpine.plugin(Clipboard)
 
Livewire.start()
