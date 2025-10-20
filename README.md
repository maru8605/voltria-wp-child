# Voltria Child (Kadence)

**Cómo instalar**
1) Comprimir esta carpeta en ZIP (ya la adjuntamos más abajo).
2) En WordPress: Apariencia → Temas → Añadir nuevo → Subir tema → Seleccionar ZIP → Instalar → Activar.
   - Alternativa: subir por SFTP a `/wp-content/themes/voltria-child/` y activar desde el panel.
3) Verás el tema en Apariencia con el nombre **Voltria Child** y el padre **Kadence**.

**Estructura**
- `style.css` → obligatorio con cabecera `Template: kadence`.
- `functions.php` → enqueue de estilos/JS.
- `theme.json` → paleta y tipografías globales (opcional, ya configurado).
- `assets/` → CSS/JS personalizados.
- `templates/` → sobreescribe archivos del padre si hace falta.

**Git / Deploy**
Inicializá un repo dentro de `voltria-child` y conectalo con Hostinger (Git deploy) apuntando a `wp-content/themes/voltria-child`.