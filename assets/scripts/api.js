// js/api.js
import { createClient } from 'https://cdn.jsdelivr.net/npm/@supabase/supabase-js/+esm'
import { supabaseConfig } from './config.js'

const supabase = createClient(supabaseConfig.url, supabaseConfig.key)

async function probarConexion() {
    const { data, error } = await supabase.from('PRODUCTOS').select('*').limit(1)
    
    if (error) {
        console.error("❌ Error de conexión:", error.message)
    } else {
        console.log("✅ ¡Conexión exitosa! Datos recibidos:", data)
    }
}

probarConexion()
